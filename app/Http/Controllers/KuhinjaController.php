<?php

namespace App\Http\Controllers;

use App\Models\Korpa;
use App\Models\Kuhinja;
use App\Models\Objekat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KuhinjaController extends Controller
{
    public function index() {
        $kuhinje = Kuhinja::dohvatiSveKuhinje();
        $restorani = Objekat::dohvatiSveRestorane();
        return view('kuhinje', compact('kuhinje', 'restorani'));
    }

    public function show($slug){
        $kuhinja = Kuhinja::query()->where('slug', $slug)->get()->first();
        $restorani = $kuhinja->getRestorani;

        $ukupnaCena = 0;

        if (Session::has('korpa')) {
            $staraKorpa = Session::get('korpa');
            $korpa = new Korpa($staraKorpa);
            $ukupnaCena = $korpa->ukupnaCena;
        }

        return view('kuhinja', compact('slug', 'restorani', 'kuhinja', 'ukupnaCena'));
    }
}
