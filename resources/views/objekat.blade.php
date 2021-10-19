@extends('layouts.app')

@section('title')
    {{ $objekat->naziv }}
@endsection

@section('content')

    <div class="container-fluid objekat-container">

        @include('includes.row-top')

        <span id="ajaxSubmit" data-url="{{ route('dodajukorpu') }}" style="display: none"></span>

        <img class="pocetna-slika" src="{{ asset('images/objekti/' . $slug . '/cover.png') }}" alt="{{ $slug }}">
        <h1 class="objekat-title">{{ $objekat->naziv }}</h1>

        @foreach($kuhinjeProizvoda as $kuhinjaProizvoda)
            <div class="kuhinja-container @if($loop->index == 0)prvi @endif" id="{{ $kuhinjaProizvoda->id }}">
                <div class="kuhinja-title-container">
                    <h2 class="kuhinja-title">{{ $kuhinjaProizvoda->naziv }}</h2><span>&dtrif;</span>
                    <div class="kuhinja-title-linija"></div>
                </div>
                <div class="kuhinja-proizvodi">
                    @foreach($proizvodi as $proizvod)
                        @if($kuhinjaProizvoda->id == $proizvod->kuhinja_proizvoda_id)
                            <div class="proizvod-content {{ $proizvod->id }}">
                                <div class="proizvod-levo">
                                    <span class="expander">+</span>
                                    <h5 class="proizvod-title">{{ $proizvod->naziv }}</h5>
                                    <p>{{ $proizvod->opis }}</p>
                                    <h5>{{ $proizvod->cena }}</h5>
                                </div>
                                @if($proizvod->imaSliku($objekat->id))
                                    <div class="proizvod-desno">
                                        <img src="{{ asset('images/objekti/' . $slug . '/' . $proizvod->slika) }}"
                                             alt="{{ $proizvod->slug }}">
                                    </div>
                                @endif
                                <div class="dodatne-informacije">
                                    <div class="varijacije">
                                        <form>
                                            {!! $proizvod->ispisiVarijacijePoRedosledu() !!}
                                        </form>
                                    </div>
                                    <div class="prilozi">
                                        {!! $proizvod->ispisiPrilogePoRedosledu() !!}
                                    </div>
                                    <div class="komentar">
                                        <label for="komentar">Komentar</label>
                                        <textarea name="komentar" id="komentar" cols="30" rows="4"></textarea>
                                    </div>
                                    <a class="dodaj-u-korpu-btn">Dodaj u korpu</a>
                                    <div class="broj-proizvoda-u-korpi-cont"><span
                                            class="broj-proizvoda-u-korpi"></span>
                                    </div>
                                    <div class="dodaj-izbaci">
                                        <div class="dodaj"><span>+</span></div>
                                        <div class="izbaci"><span>-</span></div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    <x-footer></x-footer>
@endsection

@section('scriptsBottom')
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/objekat.js') }}" type="text/javascript"></script>
@endsection
