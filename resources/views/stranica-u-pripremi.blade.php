@extends('layouts.app')

@section('title')
    Sadržaj u pripremi
@endsection

@section('content')
    <div class="desktop-u-pripremi sadrzaj-priprema">
        <h1>SADRŽAJ U PRIPREMI</h1>
    </div>

    <div class="vrati-se-na-pocetnu">
        <a href="{{ route('pocetna') }}"><h5>Vrati se na početnu stranicu</h5></a>
    </div>
@endsection
