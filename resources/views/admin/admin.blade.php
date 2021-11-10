@extends('layouts.app')

@section('content')
    @if(\Illuminate\Support\Facades\Auth::user()->rola == 'admin')
        <div class="button-container">
            <a href="{{ route('admin.proizvod.prikaziDodajNovi') }}">DODAJ NOVI PROIZVOD</a>
        </div>
    @endif
@endsection
