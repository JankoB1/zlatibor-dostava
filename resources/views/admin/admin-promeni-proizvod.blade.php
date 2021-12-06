@extends('layouts.app')

@section('content')
    @if(\Illuminate\Support\Facades\Auth::user()->rola == 'admin')
        <div class="container promeni-proizvod">
            <form action="">
                @csrf
                <input name="naziv" type="text" placeholder="{{ $proizvod->naziv }}">
                <textarea name="opis" id="opis" cols="30" rows="10">
                    {{ $proizvod->opis }}
                </textarea>
                <input name="cena" type="text" placeholder="{{ $proizvod->cena }}">
                {{ json_encode($prilozi) }}
                {{ json_encode($varijacije) }}
                {{ json_encode($vVarijacije) }}
            </form>
        </div>
    @endif
@endsection
