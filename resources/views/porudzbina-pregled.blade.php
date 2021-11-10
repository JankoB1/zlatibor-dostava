@extends('layouts.app')

@section('title')
    Pregled Porudžbine
@endsection

@section('content')
    @guest
        <h1>MORATE BITI ULOGOVANI KAKO BISTE NASTAVILI SA KUPOVINOM</h1>
    @else
        @if(Auth::user()->email_verified_at)
            @if(\Illuminate\Support\Facades\Session::has('korpa'))

                @include('includes.row-top')

                <div class="slika-korpa">
                    <img src="{{ asset('images/objekti/' . $restoran->slug . '/cover.png') }}" alt="{{ $restoran->slug }}">
                </div>
                <div class="korpa-header">
                    <h1 class="zavrsetak-kupovine">{{ $restoran->naziv }}</h1>
                </div>
                <x-cena-dostave></x-cena-dostave>
                <div class="row korpa-row">
                    <div class="col-12">
                        <table>
                            @foreach($proizvodi as $proizvod)
                                <tr class="tr-korpa">
                                    <td class="checked-td">
                                        <div>&check;</div>
                                    </td>
                                    <td class="td-prvi-broj">{{ $proizvod['broj'] }}x</td>
                                    <td class="td-info">{{ $proizvod['proizvod']['nazivSaVarijacijama'] }}<br>
                                        @if(array_key_exists('prilozi', $proizvod['proizvod']))
                                            Dodaci:<br>
                                            @foreach($proizvod['proizvod']['prilozi'] as $prilog)
                                                {{ $prilog }}
                                                <br>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td class="td-drugi-broj">x{{ $proizvod['broj'] }}</td>
                                    <td class="td-cena uspesna-porudzbina-cena">{{ $proizvod['cena'] }} RSD</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="bottom-row-korpa">
                        <div class="ukupna-cena-text"><p>Ukupna cena porudžbine</p></div>
                        <div class="ukupna-cena"><p>{{ $ukupnaCena }} RSD</p></div>
                    </div>
                    <div class="vrati-se-u-restoran">
                        <a href="{{ route('objekat', ['slug' => $restoran->slug]) }}">
                            <p>Poruči dodatnu stavku iz restorana!</p>
                        </a>
                    </div>
                    <div class="info-o-korisniku">
                        <table class="korisnik-table">
                            <tr>
                                <td>Ime i prezime</td>
                                <td>{{ Auth::user()->ime_i_prezime }}</td>
                            </tr>
                            <tr>
                                <td>Adresa</td>
                                <td>{{ Auth::user()->adresa }}</td>
                            </tr>
                            <tr>
                                <td>Apartman</td>
                                <td>{{ Auth::user()->apartman }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <td>Telefon</td>
                                <td>{{ Auth::user()->telefon }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            @else
                <h1>NEMA NISTA U KORPI</h1>
            @endif
        @else
            <h1>MORATE VERIFIKOVATI EMAIL</h1>
        @endif
    @endguest
    <x-footer></x-footer>
@endsection

@section('scriptsBottom')
    <script src="{{ asset('js/korpa.js') }}" type="text/javascript"></script>
@endsection
