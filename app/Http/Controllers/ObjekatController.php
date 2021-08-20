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

}
