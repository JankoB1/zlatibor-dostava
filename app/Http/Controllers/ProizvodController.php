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
use Illuminate\Support\Facades\Auth;
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
        $slug = utf8_encode($slug);
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
        $vrsteVarijacije = $request->input('vrsta-varijacije');


//        foreach ($varijacije as $varijacija) {
//            $varijacija = Varijacija::query()
//                ->where('naziv', '=', $varijacija)
//                ->get()
//                ->first();
//
//            $vrstaVarijacije = VrstaVarijacije::query()
//                ->where('id', '=', $varijacija->vrsta_varijacije_id)
//                ->get()
//                ->first();
//            if($naziv != $vrstaVarijacije->naziv) {
//                echo $naziv . '<br>';
//                $naziv = $vrstaVarijacije->naziv;
//            }
//
//        }
//
//        echo $naziv;

        $userObjekat = Auth::user()->objekat;
        $objekat = Objekat::query()
            ->where('slug', '=', $userObjekat)
            ->get()
            ->first();

        if (!$objekat->getKuhinjeProizvoda->contains('naziv', $kuhinjaProizvoda->naziv)) {
            $kuhinjaProizvodObjekat = [
                'kuhinja_proizvoda_id' => $kuhinjaProizvoda->id,
                'objekat_id' => $objekat->id
            ];
            DB::table('kuhinja_proizvod_objekat')->insert($kuhinjaProizvodObjekat);
        }

        $proizvod = [
            'naziv' => $naziv,
            'opis' => $opis,
            'slug' => $slug,
            'cena' => $cena,
            'kuhinja_proizvoda_id' => $kuhinjaProizvoda->id,
            'objekat_id' => $objekat->id
        ];

        Proizvod::create($proizvod);

        $proizvodId = Proizvod::where('naziv', '=', $naziv)
            ->where('opis', '=', $opis)
            ->where('slug', '=', $slug)
            ->where('cena', '=', $cena)
            ->where('kuhinja_proizvoda_id', '=', $kuhinjaProizvoda->id)
            ->where('objekat_id', '=', $objekat->id)
            ->first()
            ->id;

        $i = 0;
        if (!empty($prilozi)) {
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
        }

        $varijacija1 = Varijacija::query()
            ->where('naziv', '=', $varijacije[0])
            ->get()
            ->first();

        $vrstaVarijacije1 = VrstaVarijacije::query()
            ->where('id', '=', $varijacija1->vrsta_varijacije_id)
            ->get()
            ->first();

        $naziv = $vrstaVarijacije1->naziv;

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

            if ($naziv != $vrstaVarijacije->naziv) {

                $vrstaVarijacijaBaza = VrstaVarijacije::query()
                    ->where('naziv', '=', $naziv)
                    ->get()
                    ->first();

                $proizvodVv = [
                    'proizvod_id' => $proizvodId,
                    'vrsta_varijacije_id' => $vrstaVarijacijaBaza->id
                ];

                DB::table('proizvod_vv')->insert($proizvodVv);
                $naziv = $vrstaVarijacije->naziv;
            }

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

    public function promeniProizvodPrikazi($id)
    {

        $proizvod = Proizvod::query()
            ->where('id', '=', $id)
            ->get()
            ->first();
        $proizvodPrilozi = $proizvod->getPrilozi;
        $proizvodVarijacije = $proizvod->getVarijacije;
        $proizvodVrsteVarijacija = $proizvod->getVrsteVarijacije;
        $imaVarijacije = true;
        if ($proizvodVrsteVarijacija->first()->slug == 'default') {
            $imaVarijacije = false;
        }
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

        return view(
            'admin/admin-promeni-proizvod',
            compact(
                'imaVarijacije',
                'proizvodVrsteVarijacija',
                'proizvodVarijacije',
                'proizvod',
                'proizvodPrilozi',
                'kuhinje_proizvoda',
                'mapaVV',
                'prilozi',
                'vrsteVarijacija',
                'varijacije'
            )
        );
    }

    public function promeniProizvod($id, Request $request)
    {
        $proizvod = Proizvod::query()
            ->where('id', '=', $id)
            ->get()
            ->first();

        $naziv = $request->naziv;
        $slug = strtolower($naziv);
        $slug = utf8_encode($slug);
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

        $userObjekat = Auth::user()->objekat;
        $objekat = Objekat::query()
            ->where('slug', '=', $userObjekat)
            ->get()
            ->first();

        $noviProizvod = [
            'naziv' => $naziv,
            'opis' => $opis,
            'slug' => $slug,
            'cena' => $cena,
            'kuhinja_proizvoda_id' => $kuhinjaProizvoda->id,
            'objekat_id' => $objekat->id
        ];

        $proizvod->cena = $noviProizvod['cena'];
        $proizvod->opis = $noviProizvod['opis'];
        $proizvod->slug = $noviProizvod['slug'];
        $proizvod->naziv = $noviProizvod['naziv'];
        $proizvod->kuhinja_proizvoda_id = $noviProizvod['kuhinja_proizvoda_id'];
        $proizvod->objekat_id = $noviProizvod['objekat_id'];

        $proizvod->save();

        DB::table('proizvod_prilog')
            ->where('proizvod_id', '=', $proizvod->id)
            ->delete();

        $i = 0;
        if (!empty($prilozi)) {
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
                        'proizvod_id' => $proizvod->id,
                        'prilog_id' => $prilogId,
                        'cena' => $cenaPriloga
                    ];

                    DB::table('proizvod_prilog')->insert($proizvodPrilog);

                    $i++;
                }
            }
        }

        DB::table('proizvod_varijacija')
            ->where('proizvod_id', '=', $proizvod->id)
            ->delete();

        DB::table('proizvod_vv')
            ->where('proizvod_id', '=', $proizvod->id)
            ->delete();

        $varijacija1 = Varijacija::query()
            ->where('naziv', '=', $varijacije[0])
            ->get()
            ->first();

        $vrstaVarijacije1 = VrstaVarijacije::query()
            ->where('id', '=', $varijacija1->vrsta_varijacije_id)
            ->get()
            ->first();

        $naziv = $vrstaVarijacije1->naziv;

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

            if ($naziv != $vrstaVarijacije->naziv) {

                $vrstaVarijacijaBaza = VrstaVarijacije::query()
                    ->where('naziv', '=', $naziv)
                    ->get()
                    ->first();

                $proizvodVv = [
                    'proizvod_id' => $proizvod->id,
                    'vrsta_varijacije_id' => $vrstaVarijacijaBaza->id
                ];

                DB::table('proizvod_vv')->insert($proizvodVv);
                $naziv = $vrstaVarijacije->naziv;
            }

            $proizvodVarijacija = [
                'proizvod_id' => $proizvod->id,
                'varijacija_id' => $varijacija->id,
                'cena' => $ceneVarijacije[$i]
            ];

            DB::table('proizvod_varijacija')->insert($proizvodVarijacija);
        }

        $proizvodVv = [
            'proizvod_id' => $proizvod->id,
            'vrsta_varijacije_id' => $vrstaVarijacije->id
        ];

        DB::table('proizvod_vv')->insert($proizvodVv);
    }
}
