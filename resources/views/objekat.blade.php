@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <x-korpa></x-korpa>

        <img src="{{ asset('images/objekti/' . $slug . '/cover.png') }}" alt="{{ $slug }}">
        <h1 class="objekat-title">{{ $objekat->naziv }}</h1>

        @foreach($kuhinjeProizvoda as $kuhinjaProizvoda)
            <h2>{{ $kuhinjaProizvoda->naziv }}</h2>
            @foreach($proizvodi as $proizvod)
                @if($kuhinjaProizvoda->id == $proizvod->kuhinja_proizvoda_id)
                    <div class="proizvod-content {{ $proizvod->id }}">
                        <h5>{{ $proizvod->naziv }}</h5>
                        <p>{{ $proizvod->opis }}</p>
                        <h5>{{ $proizvod->cena }}</h5>
                        {!! $proizvod->ispisiVarijacijePoRedosledu()  !!}
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
