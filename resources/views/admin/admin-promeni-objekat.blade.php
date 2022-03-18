@extends('layouts.app')

@section('content')
    @if(\Illuminate\Support\Facades\Auth::user()->rola == 'admin')
        <div class="card-body forma-novi-proizvod">
            <form style="margin-top: 50px;" id="forma-promeni-objekat" method="POST" action="{{ route('admin.objekat.promeniObjekat') }}">
                @csrf
                @method('POST')

                @foreach($objekti as $objekat)

                    <div class="form-group">
                        <label for="">{{ $objekat->naziv }}</label>
                        <input type="radio" name="objekat" value="{{ $objekat->slug }}">
                    </div>

                @endforeach
                <input type="submit" value="Promeni Objekat">
            </form>
        </div>
    @endif
@endsection
