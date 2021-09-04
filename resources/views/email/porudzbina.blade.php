<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Potvrda porudžbine</title>
</head>
<body style="width: 70%;margin: 0 auto;">
    <img src="{{ asset('images/objekti/' . $restoran->slug . '/cover.png') }}" alt="{{ $restoran->slug }}">
    <div class="korpa-header">
        <h1 class="zavrsetak-kupovine">Porudžbina broj: {{ $brojPorudzbine }}</h1>
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
                        <td class="td-cena">{{ $proizvod['cena'] }} RSD</td>
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
                <thead>
                <th>Ime i prezime</th>
                <th>Adresa</th>
                <th>Apartman</th>
                <th>Email</th>
                <th>Telfon</th>
                </thead>
                <tr>
                    <td>{{ Auth::user()->ime_i_prezime }}</td>
                    <td>{{ Auth::user()->adresa }}</td>
                    <td>{{ Auth::user()->apartman }}</td>
                    <td>{{ Auth::user()->email }}</td>
                    <td>{{ Auth::user()->telefon }}</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
