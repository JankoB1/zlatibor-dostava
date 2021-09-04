<?php

namespace App\Http\Controllers;

use App\Models\Korpa;
use App\Models\Objekat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PorudzbinaController extends Controller
{

    public function posaljiPorudzbinu(User $user) {

        $staraKorpa = Session::get('korpa');
        $korpa = new Korpa($staraKorpa);
        $proizvodi = $korpa->proizvodi;
        $ukupnaCena = $korpa->ukupnaCena;

        $restoran = new Objekat();
        if(Session::has('restoran')){
            $restoran = Session::get('restoran');
        }


        $data = [
            'email'         => $user->email,
            'ime'           => $user->ime_i_prezime,
            'restoran'      => $restoran,
            'ukupnaCena'    => $ukupnaCena,
            'proizvodi'     => $proizvodi
        ];

        Mail::send('email.porudzbina', $data, function($message) use ($data)
        {
            $message->from(env('MAIL_FROM_ADDRESS', 'jblagoj01@gmail.com'));
            $message->to($data['email'],$data['ime']);
            $message->subject('NASLOV PROBA');
        });

        return redirect()->route('porudzbina');
    }

}
