<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Potvrda porudžbine</title>

</head>
<body
    style="color: white;overflow-x: hidden;width: 100%;margin: 0 auto;background: #1E1E1E !important;padding: 50px 5%;">
<img src="{{ asset('images/objekti/' . $restoran->slug . '/cover.png') }}" alt="{{ $restoran->slug }}">
<div class="korpa-header">
    <h1 class="zavrsetak-kupovine"
        style="padding: 10px 6%;position: relative;font-size: 25px;background: black;color: #FFC822;top: -40px;">
        Porudžbina broj: {{ $brojPorudzbine }}</h1>
    <div class="uspesna-porudzbina-info"
         style="padding: 10px;margin: -30px 4% 0 4%;border: 1px solid #FFC822;border-radius: 10px;">
        <h3 style="text-align: center;font-size: 20px;color: #FFC822;">Vaša porudžbina je uspešno poslata. Hrana će biti
            na vašim vratima za <span
                style="display: block;width: fit-content;margin: 10px auto 0 auto;padding: 25px 12px;border-radius: 50%;background: #ffc822;color: #2c2c2c;">30-60'</span>
        </h3>
    </div>
    <h2 class="korpa-naziv-restorana"
        style="padding: 10px 6%;position: relative;font-size: 25px;color: white;">{{ $restoran->naziv }}</h2>
</div>

<div class="row korpa-row">
    <div class="col-12" style="padding-bottom: 50px;">
        <table>
            @foreach($proizvodi as $proizvod)
                <tr class="tr-korpa" style="border-top: 1px solid #5c5c5c;">
                    <td class="td-prvi-broj"
                        style="color: #FFC822;padding: 10px 20px !important;vertical-align: top;font-size: 16px;">{{ $proizvod['broj'] }}
                        x
                    </td>
                    <td class="td-info"
                        style="width: 50%;padding: 10px 0;vertical-align: top;color: white;font-size: 16px;">{{ $proizvod['proizvod']['nazivSaVarijacijama'] }}
                        <br>
                        @if(array_key_exists('prilozi', $proizvod['proizvod']))
                            Dodaci:<br>
                            @foreach($proizvod['proizvod']['prilozi'] as $prilog)
                                {{ $prilog }}
                                <br>
                            @endforeach
                        @endif
                    </td>
                    <td class="td-drugi-broj"
                        style="padding: 10px 20px !important;vertical-align: top;color: white;font-size: 16px;">
                        x{{ $proizvod['broj'] }}</td>
                    <td class="td-cena"
                        style="width: 30%;padding: 10px 20px !important;vertical-align: top;color: white;font-size: 16px;">{{ $proizvod['cena'] }}
                        RSD
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="bottom-row-korpa" style="width: 94%;margin: 0 3%;padding: 10px 0;border-top: 1px solid #5c5c5c;">
        <div class="ukupna-cena-text" style="font-size: 20px;display: inline-block;width: fit-content;"><p
                style="color: white;font-size: 16px;">Ukupna cena porudžbine</p></div>
        <div class="ukupna-cena" style="font-size: 20px;display: inline-block;width: fit-content;float: right;"><p
                style="color: white;font-size: 16px;">{{ $ukupnaCena }} RSD</p></div>
    </div>

    <div class="obavestenje-cena-dostave"
         style="margin: -30px 4% 20px 4%;border: 2px solid #CD272E;border-radius: 10px;">
        <h3 style="margin-top: 0px;padding: 10px;background: #CD272E;color: white;text-align: center;border-radius: 5px 5px 0 0;text-transform: uppercase;">
            Važno obaveštenje</h3>
        <p style="text-align: center;padding: 0 10px 10px 10px;border-bottom: 1px solid #CD272E;margin-bottom: 0;color: white;font-size: 16px;">
            Cena dostave će biti dodata na ukupnu cenu porudžbine u zavisnosti od udaljenosti od objekta.</p>
        <table style="width: 100%;text-align: center;">
            <tr style="border-top: 1px solid #5c5c5c;border-bottom: 1px solid #CD272E;">
                <td style="padding: 5px;vertical-align: top;width: 50%;font-size: 16px;color: white;">0-1,5 km</td>
                <td style="padding: 5px;vertical-align: top;width: 50%;font-size: 16px;color: white;">220 din</td>
            </tr>
            <tr style="border-top: 1px solid #5c5c5c;border-bottom: 1px solid #CD272E;">
                <td style="padding: 5px;vertical-align: top;width: 50%;font-size: 16px;color: white;">1,5-3 km</td>
                <td style="padding: 5px;vertical-align: top;width: 50%;font-size: 16px;color: white;">360 din</td>
            </tr>
            <tr style="border-top: 1px solid #5c5c5c;border-bottom: 1px solid #CD272E;">
                <td style="padding: 5px;vertical-align: top;width: 50%;font-size: 16px;color: white;">3-5 km</td>
                <td style="padding: 5px;vertical-align: top;width: 50%;font-size: 16px;color: white;">440 din</td>
            </tr>
            <tr class="zadnji-red" style="border-top: 1px solid #5c5c5c;border-bottom: 0 !important;">
                <td style="padding: 5px;vertical-align: top;width: 50%;font-size: 16px;color: white;">5+ km</td>
                <td style="padding: 5px;vertical-align: top;width: 50%;font-size: 16px;color: white;">PO DOGOVORU</td>
            </tr>
        </table>
    </div>

    <div class="info-o-korisniku" style="width: 95%;margin: 0 auto;">
        <table class="korisnik-table" style="width: 100%;">
            <tr style="border-top: 1px solid #5c5c5c;">
                <td style="padding: 10px 0;vertical-align: top;color: white;font-size: 16px;">Ime i prezime</td>
                <td style="padding: 10px 0;vertical-align: top;text-align: right;color: white;font-size: 16px;">{{ Auth::user()->ime_i_prezime }}</td>
            </tr>
            <tr style="border-top: 1px solid #5c5c5c;">
                <td style="padding: 10px 0;vertical-align: top;color: white;font-size: 16px;">Adresa</td>
                <td style="padding: 10px 0;vertical-align: top;text-align: right;color: white;font-size: 16px;">{{ Auth::user()->adresa }}</td>
            </tr>
            <tr style="border-top: 1px solid #5c5c5c;">
                <td style="padding: 10px 0;vertical-align: top;color: white;font-size: 16px;">Apartman</td>
                <td style="padding: 10px 0;vertical-align: top;text-align: right;color: white;font-size: 16px;">{{ Auth::user()->apartman }}</td>
            </tr>
            <tr style="border-top: 1px solid #5c5c5c;">
                <td style="padding: 10px 0;vertical-align: top;color: white;font-size: 16px;">Email</td>
                <td style="padding: 10px 0;vertical-align: top;text-align: right;color: white !important;font-size: 16px;">{{ Auth::user()->email }}</td>
            </tr>
            <tr style="border-top: 1px solid #5c5c5c;">
                <td style="padding: 10px 0;vertical-align: top;color: white;font-size: 16px;">Telefon</td>
                <td style="padding: 10px 0;vertical-align: top;text-align: right;color: white;font-size: 16px;">{{ Auth::user()->telefon }}</td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>
