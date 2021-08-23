<?php

namespace App\Http\Controllers;

use App\Models\Kuhinja;
use Illuminate\Http\Request;

class KuhinjaController extends Controller
{
    public function index() {
        $kuhinje = Kuhinja::dohvatiSveKuhinje();
        return view('restorani', compact('kuhinje'));
    }

    public function show($slug){
        $kuhinja = Kuhinja::query()->where('slug', $slug)->get()->first();
        $restorani = $kuhinja->getRestorani;
        return view('kuhinja', compact('slug', 'restorani'));
    }
}
