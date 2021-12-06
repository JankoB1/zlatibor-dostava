<?php

namespace App\Http\Controllers;

use App\Models\Korpa;
use App\Models\KuhinjaProizvoda;
use App\Models\Objekat;
use App\Models\Prilog;
use App\Models\Proizvod;
use App\Models\Varijacija;
use App\Models\VrstaVarijacije;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class
ProizvodController extends Controller
{
    public function dodajProizvodUKorpu(Request $request)
    {
        $staraKopra = Session::has('korpa') ? Session::get('korpa') : null;
        $korpa = new Korpa($staraKopra);
        $korpa->dodaj($request->proizvod, $request->proizvod['naziv']);

        $referer = $request->headers->get('referer');
        $slugs = explode('/', $referer);
        $restoranSlug = end($slugs);
        $restoran = Objekat::query()
            ->where('slug', '=', $restoranSlug)
            ->get()
            ->first();

        $request->session()->put('restoran', $restoran);
        $request->session()->put('korpa', $korpa);
    }

    public function smanjiZaJedan($naziv)
    {
        $staraKopra = Session::get('korpa') ? Session::get('korpa') : null;
        $korpa = new Korpa($staraKopra);
        $korpa->smanjiZaJedan($naziv);

        if (count($korpa->proizvodi) > 0) {
            Session::put('korpa', $korpa);
        } else {
            Session::forget('korpa');
        }
    }

    public function ukloniProizvod($naziv)
    {
        $staraKopra = Session::get('korpa') ? Session::get('korpa') : null;
        $korpa = new Korpa($staraKopra);
        $korpa->ukloniProizvod($naziv);

        if (count($korpa->proizvodi) > 0) {
            Session::put('korpa', $korpa);
        } else {
            Session::forget('korpa');
        }

        return redirect()->route('korpa');
    }

    public function prikaziKorpu()
    {
        if (!Session::has('korpa')) {
            return view('korpa');
        }
        $staraKorpa = Session::get('korpa');
        $korpa = new Korpa($staraKorpa);
        $proizvodi = $korpa->proizvodi;
        $ukupnaCena = $korpa->ukupnaCena;

        $restoran = new Objekat();
        if (Session::has('restoran')) {
            $restoran = Session::get('restoran');
        }

        return view('korpa', compact('proizvodi', 'ukupnaCena', 'restoran'));
    }

    public function resetujKorpu()
    {

        Session::forget('korpa');
        Session::forget('restoran');
        Session::forget('broj-porudzbine');

        return redirect()->route('pocetna');
    }

    public function prikaziDodajNoviProizvod()
    {
        $kuhinje_proizvoda = KuhinjaProizvoda::getSveKuhinjeProizvoda();
        $prilozi = Prilog::dohvatiSvePriloge();
        $vrsteVarijacija = VrstaVarijacije::dohvatiSveVrsteVarijacija();
        $varijacije = Varijacija::dohvatiSveVarijacije();

        $mapaVV = '[';
        foreach ($vrsteVarijacija as $vrstaVarijacije) {
            $mapaVV .= '{"naziv": "' . $vrstaVarijacije->naziv . '", "varijacije":';
            $mapaVV .= json_encode($vrstaVarijacije->getVarijacije) . '},';
        }
        $mapaVV = substr($mapaVV, 0, -1);
        $mapaVV .= ']';

        return view('admin/admin-novi-proizvod', compact('kuhinje_proizvoda', 'mapaVV', 'prilozi', 'vrsteVarijacija', 'varijacije'));
    }

    public function dodajNoviProizvod(Request $request)
    {
        $naziv = $request->naziv;
        $slug = strtolower($naziv);
        $opis = $request->opis;
        $kuhinjaProizvodaInput = $request->input('kuhinja-proizvoda');
        $kuhinjaProizvoda = KuhinjaProizvoda::query()
            ->where('naziv', '=', $kuhinjaProizvodaInput)
            ->get()
            ->first();

        $cena = $request->cena;
        $prilozi = $request->input('prilog');
        $cenePriloga = $request->input('cena-priloga');
        $varijacije = $request->input('varijacija');
        $ceneVarijacije = $request->input('cena-proizvoda-v');

        $proizvod = [
            'naziv' => $naziv,
            'opis' => $opis,
            'slug' => $slug,
            'cena' => $cena,
            'kuhinja_proizvoda_id' => $kuhinjaProizvoda->id,
            'objekat_id' => 9
        ];

        Proizvod::create($proizvod);

        $proizvodId = Proizvod::where('naziv', '=', $naziv)
            ->where('opis', '=', $opis)
            ->where('slug', '=', $slug)
            ->where('cena', '=', $cena)
            ->where('kuhinja_proizvoda_id', '=', $kuhinjaProizvoda->id)
            ->where('objekat_id', '=', 9)
            ->first()
            ->id;

        $i = 0;
        $length = count($prilozi);
        foreach ($cenePriloga as $cenaPriloga) {

            if ($i >= $length) {
                break;
            }

            if ($cenaPriloga != null) {

                $prilogId = Prilog::query()
                    ->where('naziv', '=', $prilozi[$i])
                    ->get()
                    ->first()
                    ->id;

                $proizvodPrilog = [
                    'proizvod_id' => $proizvodId,
                    'prilog_id' => $prilogId,
                    'cena' => $cenaPriloga
                ];

                DB::table('proizvod_prilog')->insert($proizvodPrilog);

                $i++;
            }
        }

        $length = count($varijacije);
        $vrstaVarijacije = null;
        for ($i = 0; $i < $length; $i++) {

            $varijacija = Varijacija::query()
                ->where('naziv', '=', $varijacije[$i])
                ->get()
                ->first();

            $vrstaVarijacije = VrstaVarijacije::query()
                ->where('id', '=', $varijacija->vrsta_varijacije_id)
                ->get()
                ->first();

            $proizvodVarijacija = [
                'proizvod_id' => $proizvodId,
                'varijacija_id' => $varijacija->id,
                'cena' => $ceneVarijacije[$i]
            ];

            DB::table('proizvod_varijacija')->insert($proizvodVarijacija);
        }

        $proizvodVv = [
            'proizvod_id' => $proizvodId,
            'vrsta_varijacije_id' => $vrstaVarijacije->id
        ];

        DB::table('proizvod_vv')->insert($proizvodVv);
    }

    public function promeniProizvod($id)
    {

        $proizvod = Proizvod::query()
            ->where('id', '=', $id)
            ->get()
            ->first();

        $kuhinjaProizvoda = KuhinjaProizvoda::query()
            ->where('id', '=', $proizvod->kuhinja_proizvoda_id)
            ->get()
            ->first();

        $prilozi = '';
        $vVarijacije = '';
        $varijacije = '';

        return view('admin/admin-promeni-proizvod', compact('proizvod', 'prilozi', 'vVarijacije', 'varijacije', 'kuhinjaProizvoda'));
    }
}
