@extends('layouts.app')

@section('title')
    Uspešna Porudžbina
@endsection

@section('content')

    @guest
        <h1>MORATE BITI ULOGOVANI KAKO BISTE NASTAVILI SA KUPOVINOM</h1>
    @else
        @if(Auth::user()->email_verified_at)
            @if(\Illuminate\Support\Facades\Session::has('korpa'))

                @include('includes.row-top')

                <div class="slika-korpa">
                    <img src="{{ asset('images/objekti/' . $restoran->slug . '/cover.png') }}"
                         alt="{{ $restoran->slug }}">
                </div>

                <div class="korpa-header">
                    <h1 class="zavrsetak-kupovine">Porudžbina broj: {{ Session::get('broj-porudzbine') }}</h1>
                    <div class="uspesna-porudzbina-info">
                        <h3>Da biste potvrdili porudžbinu potrebno je da pošaljete broj porudžbine preko
                            <strong>SMS-a </strong>ili
                            <strong>Viber-a</strong>. To možete učiniti klikom na neku od ikonica ispod.</h3>
                        <h3> Nakon što pošaljete poruku Vaša porudžbina će biti aktivna i neko od dostavljača će
                            Vas kontaktirati.</h3>
                        <div class="viber-sms">
                            <a href="sms:+381611609716&body={{ Session::get('broj-porudzbine') }}"><img width="52"
                                                                                                        src="{{ asset('images/site/sms.png') }}"
                                                                                                        alt="sms"></a>
                            <a href="viber://chat/?number=%2B+381611609716"><img width="52"
                                                                                 src="{{ asset('images/site/viber.png') }}"
                                                                                 alt="viber"></a>
                        </div>
                        <h3>Prosečno vreme dostave je<span>30-60'</span></h3>
                    </div>
                    <div class="google-ocena">
                        <h3>Ocenite nas na Google-u</h3>
                        <h5><strong>ZLATIBORDOSTAVA.RS & GLOVO.RS RED COMBI DELIVERY</strong></h5>
                        <a href="https://www.google.com/maps/place/ZLATIBORDOSTAVA.RS+%26+GLOVO.RS+RED+COMBI+DELIVERY,+%D0%97%D0%BB%D0%B0%D1%82%D0%B8%D0%B1%D0%BE%D1%80+31315/data=!4m2!3m1!1s0x47582f4ccd5675b9:0xb38d29aceccf84d1?utm_source=mstt_1&entry=gps"><img
                                width="52" src="{{ asset('images/site/G.svg') }}" alt="google"></a>
                        <h3>Hvala na saradnji!<br>Vaš <strong>Red Combi Delivery</strong></h3>
                    </div>
                    <h2 class="korpa-naziv-restorana">{{ $restoran->naziv }}</h2>
                </div>

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
