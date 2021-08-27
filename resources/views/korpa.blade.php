@extends('layouts.app')

@section('content')
    @if(\Illuminate\Support\Facades\Session::has('korpa'))
        <div class="row">
            @foreach($proizvodi as $proizvod)
                <div class="col-12">
                    <span class="badge">{{ $proizvod['broj'] }}</span>
                    <span>x</span>
                    <p class="proizvod-korpa-title">{{ $proizvod['proizvod']['naziv'] }}</p>
                    <span class="proizvod-korpa-cena">{{ $proizvod['cena'] }} RSD</span>
                </div>
                <a href="{{ route('korpa.ukloni', ['naziv' => $proizvod['proizvod']['naziv']]) }}" class="ukloni">UKLONI</a>
            @endforeach
            <div class="ukupna-cena">{{ $ukupnaCena }}</div>
        </div>
    @else
        <h1>NEMA NISTA U KORPI</h1>
    @endif
@endsection
