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

        return view('admin/admin-novi-proizvod', compact('kuhinje_proizvoda','mapaVV', 'prilozi', 'vrsteVarijacija', 'varijacije'));
    }

    public function dodajNoviProizvod(Request $request)
    {
        $naziv = $request->naziv;
        $opis = $request->opis;
        $cena = $request->cena;
        $prilozi = $request->input('moguci-prilozi');
        $cenePriloga = $request->input('cena-priloga');

        echo json_encode($prilozi);
        echo json_encode($cenePriloga);
    }
}
