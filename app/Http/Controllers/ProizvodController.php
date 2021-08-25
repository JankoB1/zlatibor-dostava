<?php

namespace App\Http\Controllers;

use App\Models\Korpa;
use App\Models\Proizvod;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProizvodController extends Controller
{

    public function dodajUKorpu(Request $request) {
        $request->session()->put('korpa', $request->proizvodi);
    }
}
