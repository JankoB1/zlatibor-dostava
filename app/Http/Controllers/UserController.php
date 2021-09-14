<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function prikaziPromeniAdresu() {
        return view('promeni-adresu');
    }

    public function promeniAdresu(User $user) {

        $input = \request()->validate([
            'nova-adresa' => 'required',
        ]);
        echo json_encode($user);
        echo json_encode($input);
        $user->adresa = $input['nova-adresa'];
        $user->save();

        return redirect()->route('pocetna');
    }
}
