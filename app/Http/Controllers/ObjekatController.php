<?php

namespace App\Http\Controllers;

use App\Models\Korpa;
use App\Models\Kuhinja;
use App\Models\Objekat;
use App\Models\Proizvod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ObjekatController extends Controller
{

    public function index() {
        $restorani = Objekat::dohvatiSveRestorane();
        $kuhinje = Kuhinja::dohvatiSveKuhinje();

        $ukupnaCena = 0;

        if (Session::has('korpa')) {
            $staraKorpa = Session::get('korpa');
            $korpa = new Korpa($staraKorpa);
            $ukupnaCena = $korpa->ukupnaCena;
        }

        return view('pocetna', compact('restorani', 'kuhinje', 'ukupnaCena'));
    }

    public function show($slug) {

        $objekat = Objekat::query()
            ->where('slug', $slug)
            ->get()
            ->first();
        $proizvodi = $objekat->getProizvodi;
        $kuhinjeProizvoda = $objekat->getKuhinjeProizvoda;
        //dd($proizvodi);
        foreach ($kuhinjeProizvoda as $key => $kuhinja) {
            $imaProizvoda = Proizvod::where([
                ['objekat_id', '=', $objekat->id],
                ['kuhinja_proizvoda_id', '=', $kuhinja->id]
            ])
                ->get()
                ->first();
            if($imaProizvoda == null) {
                $kuhinjeProizvoda->forget($key);
            }
        }


        if(Session::has('restoran')) {
            $restoran = Session::get('restoran');
            if($restoran->id != $objekat->id) {
                Session::forget('korpa');
                Session::forget('restoran');
            }
        }

        $ukupnaCena = 0;

        if(Session::has('korpa')) {
            $staraKorpa = Session::get('korpa');
            $korpa = new Korpa($staraKorpa);
            $ukupnaCena = $korpa->ukupnaCena;
        }

        return view('objekat', compact('slug', 'objekat', 'proizvodi', 'kuhinjeProizvoda', 'ukupnaCena'));
    }

    public function search(Request $request){

        $search = $request->input('search');

        $ukupnaCena = 0;

        if(Session::has('korpa')) {
            $staraKorpa = Session::get('korpa');
            $korpa = new Korpa($staraKorpa);
            $ukupnaCena = $korpa->ukupnaCena;
        }

        $restorani = Objekat::query()
            ->where('naziv', 'LIKE', "%{$search}%")
            ->orWhere('opis', 'LIKE', "%{$search}%")
            ->get();

        return view('search', compact('restorani', 'ukupnaCena'));
    }

    public function priprema() {
        return view('stranica-u-pripremi');
    }

    public function prikaziPromeniObjekat() {
        $objekti = Objekat::all();
        $user = auth()->user();
        $objekat = Objekat::where('slug', '=', $user->objekat)
            ->get()
            ->first;

        $userObjekat = $objekat->naziv->naziv;
        return view('admin/admin-promeni-objekat', compact('objekti', 'userObjekat'));
    }

    public function promeniObjekat(Request $request) {
        $user = auth()->user();
        $user->objekat = $request->objekat;
        $user->save();
        return redirect()->back();
    }

    public function prikaziSafeDriver() {
        return view('safe-driver');
    }

    public function prikaziONama() {
        return view('o-nama');
    }

}
