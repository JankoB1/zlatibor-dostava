@extends('layouts.app')

@section('content')

    <div class="dodatne-informacije">
        <form action="">
            @csrf
            <input type="text" placeholder="Sprat">
            <input type="text" placeholder="Broj stana">
        </form>
    </div>

@endsection
