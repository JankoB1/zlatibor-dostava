<?php

namespace App\Http\Controllers;

use App\Models\Kuhinja;
use App\Models\Objekat;
use Illuminate\Http\Request;

class KuhinjaController extends Controller
{
    public function index() {
        $kuhinje = Kuhinja::dohvatiSveKuhinje();
        $restorani = Objekat::dohvatiSveRestorane();
        return view('restorani', compact('kuhinje', 'restorani'));
    }

    public function show($slug){
        $kuhinja = Kuhinja::query()->where('slug', $slug)->get()->first();
        $restorani = $kuhinja->getRestorani;
        return view('kuhinja', compact('slug', 'restorani'));
    }
}
