<?php

namespace App\Http\Controllers;

use App\Models\Korpa;
use App\Models\Objekat;
use App\Models\Porudzbina;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PorudzbinaController extends Controller
{

    public function prikaziUspesnuPorudzbinu() {
        if (!Session::has('korpa')) {
            return view('korpa');
        }
        $staraKorpa = Session::get('korpa');
        $korpa = new Korpa($staraKorpa);
        $proizvodi = $korpa->proizvodi;
        $ukupnaCena = $korpa->ukupnaCena;

        $restoran = new Objekat();
        if(Session::has('restoran')){
            $restoran = Session::get('restoran');
        }

        return view('uspesna-porudzbina', compact('proizvodi', 'ukupnaCena', 'restoran'));
    }

    public function prikaziPorudzbinu() {
        if (!Session::has('korpa')) {
            return view('korpa');
        }
        $staraKorpa = Session::get('korpa');
        $korpa = new Korpa($staraKorpa);
        $proizvodi = $korpa->proizvodi;
        $ukupnaCena = $korpa->ukupnaCena;

        $restoran = new Objekat();
        if(Session::has('restoran')){
            $restoran = Session::get('restoran');
        }

        return view('porudzbina-pregled', compact('proizvodi', 'ukupnaCena', 'restoran'));
    }

    public function posaljiPorudzbinu(User $user) {

        $staraKorpa = Session::get('korpa');
        $korpa = new Korpa($staraKorpa);
        $proizvodi = $korpa->proizvodi;
        $ukupnaCena = $korpa->ukupnaCena;

        $restoran = new Objekat();
        if(Session::has('restoran')){
            $restoran = Session::get('restoran');
        }

        while(1) {
            $brojPorudzbine = rand(100000, 999999);
            $porudzbina = Porudzbina::query()
                ->where('broj_porudzbine', '=', $brojPorudzbine)
                ->get()
                ->first();

            if($porudzbina == null) {
                break;
            }
        }

        Session::put('broj-porudzbine', $brojPorudzbine);

        $data = [
            'userId'            => $user->id,
            'email'             => $user->email,
            'ime'               => $user->ime_i_prezime,
            'restoran'          => $restoran,
            'ukupnaCena'        => $ukupnaCena,
            'proizvodi'         => $proizvodi,
            'brojPorudzbine'   => $brojPorudzbine
        ];

        $porudzbina = [
            'broj_porudzbine'   => $brojPorudzbine,
            'user_id'           => $data['userId'],
            'cena'              => $ukupnaCena,
        ];

        Porudzbina::create($porudzbina);

        Mail::send('email.porudzbina', $data, function($message) use ($data)
        {
            $message->from(env('MAIL_FROM_ADDRESS', 'jblagoj01@gmail.com'));
            $message->to($data['email'],$data['ime']);
            $message->subject('Vaša Porudžbina - Rad Combi Dostava');
        });

        Mail::send('email.porudzbina', $data, function($message) use ($data)
        {
            $message->from(env('MAIL_FROM_ADDRESS', 'jblagoj01@gmail.com'));
            $message->to('zlatibor@zlatibordostava.rs', 'Zlatibor Dostava');
            $message->subject('Vaša Porudžbina - Rad Combi Dostava');
        });

        return redirect()->route('porudzbina.uspesna');
    }

}
