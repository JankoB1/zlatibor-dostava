@extends('layouts.app')

@section('content')
    <div class="container-fluid objekat-container">

        <div class="korpa-container">
            <a href="{{ route('korpa') }}"><p class="korpa-text"></p></a>
            <p class="korpa-cena">{{ $ukupnaCena }}</p>
            <span class="valuta">RSD</span>
        </div>

        <span id="ajaxSubmit" data-url="{{ route('dodajukorpu') }}" style="display: none"></span>

        <img src="{{ asset('images/objekti/' . $slug . '/cover.png') }}" alt="{{ $slug }}">
        <h1 class="objekat-title">{{ $objekat->naziv }}</h1>

        @if(\Illuminate\Support\Facades\Session::has('restoran'))
            {{ \Illuminate\Support\Facades\Session::get('restoran') }}
        @endif

        @foreach($kuhinjeProizvoda as $kuhinjaProizvoda)
            <h2 class="kuhinja-title">{{ $kuhinjaProizvoda->naziv }}</h2>
            <div class="kuhinja-title-linija"></div>
            @foreach($proizvodi as $proizvod)
                @if($kuhinjaProizvoda->id == $proizvod->kuhinja_proizvoda_id)
                    <div class="proizvod-content {{ $proizvod->id }}">
                        <div class="proizvod-levo">
                            <span class="expander">+</span>
                            <h5 class="proizvod-title">{{ $proizvod->naziv }}</h5>
                            <p>{{ $proizvod->opis }}</p>
                            <h5>{{ $proizvod->cena }}</h5>
                        </div>
                        <div class="proizvod-desno">
                            @if($proizvod->imaSliku($objekat->id))
                                <img src="{{ asset('images/objekti/' . $slug . '/' . $proizvod->slika) }}" alt="{{ $proizvod->slug }}">
                            @endif
                        </div>
                        <div class="dodatne-informacije">
                            <div class="varijacije">
                                <form>
                                    {!! $proizvod->ispisiVarijacijePoRedosledu() !!}
                                </form>
                            </div>
                            <div class="prilozi">
                                {!! $proizvod->ispisiPrilogePoRedosledu() !!}
                            </div>
                            <a class="dodaj-u-korpu-btn">Dodaj u korpu</a>
                            <div class="broj-proizvoda-u-korpi-cont"><span class="broj-proizvoda-u-korpi"></span></div>
                            <div class="dodaj-izbaci">
                                <div class="dodaj"><span>></span></div>
                                <div class="izbaci"><span><</span></div>
                            </div>
                            <div class="komentar">
                                <label for="komentar">Komentar</label>
                                <textarea name="komentar" id="komentar" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
    </div>

    <x-footer></x-footer>
@endsection

@section('scriptsBottom')
    <script src="{{ asset('js/objekat.js') }}" type="text/javascript"></script>
@endsection
