@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <x-korpa></x-korpa>

        <span id="ajaxSubmit" data-url="{{ route('dodajukorpu') }}" style="display: none"></span>

        <img src="{{ asset('images/objekti/' . $slug . '/cover.png') }}" alt="{{ $slug }}">
        <h1 class="objekat-title">{{ $objekat->naziv }}</h1>

        @foreach($kuhinjeProizvoda as $kuhinjaProizvoda)
            <h2>{{ $kuhinjaProizvoda->naziv }}</h2>
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
                            @if(file_exists($proizvod->putanjaSlike($objekat->id)))
                                <img src="{{ $proizvod->putanjaSlike($objekat->id) }}" alt="{{ $proizvod->slug }}">
                            @endif
                        </div>
                        <div class="varijacije">
                            <form>
                                {!! $proizvod->ispisiVarijacijePoRedosledu() !!}
                            </form>
                        </div>
                        <div class="prilozi">
                            {!! $proizvod->ispisiPrilogePoRedosledu() !!}
                        </div>
                        <a class="dodaj-u-korpu-btn">Dodaj u korpu</a>
                    </div>
                @endif
            @endforeach
        @endforeach

    </div>
@endsection

@section('scriptsBottom')
    <script src="{{ asset('js/objekat.js') }}" type="text/javascript"></script>
@endsection

{{--@section('scriptsBottom')--}}
{{--    <script>--}}
{{--        inicijalizujPodatkeZaNarucivanje('{!! addslashes(json_encode($proizvodi))!!}');--}}
{{--    </script>--}}
{{--@endsection--}}
