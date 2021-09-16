<?php

namespace App\Http\Controllers;

use App\Models\Korpa;
use App\Models\Objekat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ObjekatController extends Controller
{

    public function index() {
        $restorani = Objekat::dohvatiSveRestorane();

        $ukupnaCena = 0;

        if (Session::has('korpa')) {
            $staraKorpa = Session::get('korpa');
            $korpa = new Korpa($staraKorpa);
            $ukupnaCena = $korpa->ukupnaCena;
        }

        return view('pocetna', compact('restorani', 'ukupnaCena'));
    }

    public function show($slug){
        $objekat = Objekat::query()
            ->where('slug', $slug)
            ->get()
            ->first();
        $proizvodi = $objekat->getProizvodi;
        $kuhinjeProizvoda = $objekat->getKuhinjeProizvoda;

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

        $restorani = Objekat::query()
            ->where('naziv', 'LIKE', "%{$search}%")
            ->orWhere('opis', 'LIKE', "%{$search}%")
            ->get();

        return view('search', compact('restorani'));
    }

}
