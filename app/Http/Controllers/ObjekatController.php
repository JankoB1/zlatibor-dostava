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
        return view('pocetna', compact('restorani'));
    }

    public function show($slug){
        $objekat = Objekat::query()->where('slug', $slug)->get()->first();
        $proizvodi = $objekat->getProizvodi;
        $kuhinjeProizvoda = $objekat->getKuhinjeProizvoda;
        if(!strpos(url()->previous(), 'korpa')) {
            Session::forget('korpa');
        }

        $ukupnaCena = 0;

        if(Session::has('korpa')) {
            $staraKorpa = Session::get('korpa');
            $korpa = new Korpa($staraKorpa);
            $ukupnaCena = $korpa->ukupnaCena;
        }

        return view('objekat', compact('slug', 'objekat', 'proizvodi', 'kuhinjeProizvoda', 'ukupnaCena'));
    }

}
