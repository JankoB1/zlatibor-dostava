@extends('layouts.app')

@section('title')
    Korpa
@endsection

@section('content')

    @guest
        <div class="korpa-upozorenje">
            <h1>MORATE BITI ULOGOVANI KAKO BISTE NASTAVILI SA KUPOVINOM</h1>
        </div>
    @else
        @if(Auth::user()->email_verified_at)
            @if(\Illuminate\Support\Facades\Session::has('korpa'))

                @include('includes.row-top')

                <div class="slika-korpa">
                    <img src="{{ asset('images/objekti/' . $restoran->slug . '/cover.png') }}"
                         alt="{{ $restoran->slug }}">
                </div>
                <div class="korpa-header">
                    <h1 class="zavrsetak-kupovine">Korpa</h1>
                </div>

                <x-cena-dostave></x-cena-dostave>

                <div class="korpa-header">
                    <h2 class="korpa-naziv-restorana">{{ $restoran->naziv }}</h2>
                </div>

                <div class="row korpa-row">
                    <div class="col-12">
                        <table>
                            @foreach($proizvodi as $proizvod)
                                @if ($loop->first)
                                    <h5>Artikli</h5>
                                @endif
                                <tr class="tr-korpa">
                                    <td class="proizvod-korpa-title"
                                        style="display: none;">{{ $proizvod['proizvod']['naziv'] }}</td>
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
                                    <td class="td-cena">{{ $proizvod['cena'] }} RSD</td>
                                    <td><a class="ukloni btn btn-danger">X</a></td>
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
                </div>
            @else
                <div class="korpa-upozorenje">
                    <h1>NEMA NISTA U KORPI</h1>
                </div>
            @endif
        @else
            <div class="korpa-upozorenje">
                <h1>MORATE VERIFIKOVATI EMAIL</h1>
            </div>
        @endif
    @endguest
@endsection

@section('scriptsBottom')
    <script src="{{ asset('js/korpa.js') }}" type="text/javascript"></script>
@endsection
