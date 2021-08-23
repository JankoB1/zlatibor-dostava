<?php

namespace App\Http\Controllers;

use App\Models\Objekat;
use Illuminate\Http\Request;

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
        return view('objekat', compact('slug', 'objekat', 'proizvodi', 'kuhinjeProizvoda'));
    }

}
