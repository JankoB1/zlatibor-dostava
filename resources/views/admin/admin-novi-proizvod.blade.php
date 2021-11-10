@extends('layouts.app')

@section('content')
    @if(\Illuminate\Support\Facades\Auth::user()->rola == 'admin')

        <p style="display: none;" id="varijacije-js">
            {{ $mapaVV }}
        </p>

        <div class="card-body forma-novi-proizvod">
            <form id="forma-login" method="POST" action="{{ route('admin.proizvod.dodajNovi') }}">
                @csrf
                @method('PATCH')

                <div class="form-group row mb-0">
                    <div class="col-md-12 offset-md-4">
                        <label for="naziv">Naziv Proizvoda</label>
                        <input id="naziv" type="text" class="form-control"
                               name="naziv" required autofocus>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12 offset-md-4">
                        <label for="opis">Opis Proizvoda</label>
                        <textarea name="opis" id="opis" cols="30" rows="5"></textarea>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <label for="slika">Slika Proizvoda</label>
                    <input id="slika" name="slika" type="file">
                </div>

                <div class="form-group row mb-0">
                    <label for="kuhinja-proizvoda">Kuhinja Proizvoda</label>
                    <select name="kuhinja-proizvoda" id="kuhinja-proizvoda">
                        @foreach($kuhinje_proizvoda as $kuhinja_proizvoda)
                            <option value="{{ $kuhinja_proizvoda->naziv }}">{{ $kuhinja_proizvoda->naziv }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group row mb-0">
                    <label for="cena">Cena Proizvoda</label>
                    <input id="cena" name="cena" type="text">
                </div>

                <!-- PRILOZI -->
                <div class="form-group row mb-0 prilozi">
                    <label>Moguci Prilozi</label>
                    @foreach($prilozi as $prilog)
                        <div class="prilog-cont">
                            <input type="checkbox" name="prilog[]" value="{{ $prilog->naziv }}">
                            <label>{{ $prilog->naziv }}</label>
                            <input type="number" name="cena-priloga[]" id="cena-priloga" placeholder="Cena">
                        </div>
                    @endforeach
                </div>

                <!-- VARIJACIJE -->
                <div class="form-group row mb-0 varijacije">
                    <label>Moguce Varijacije</label>
                    <select name="vrsta-varijacije" id="vrsta-varijacije">
                        @foreach($vrsteVarijacija as $vrstaVarijacije)
                            <option
                                @if($loop->index==0){{"selected=selected"}}@else() @endif value="{{ $vrstaVarijacije->naziv }}">{{ $vrstaVarijacije->naziv }}</option>
                        @endforeach
                    </select>
                    <div class="posebna-varijacija">
                        <label for="cena-priloga">Cena Proizvoda (izabrane varijacije)</label>
                        <input type="number" name="cena-proizvoda-v[]" id="cena-proizvoda-v">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    {{ __('Dodaj Proizvod') }}
                </button>
            </form>
        </div>
    @endif
@endsection

@section('scriptsBottom')
    <script type="text/javascript" src="{{ asset('js/noviProizvod.js') }}"></script>
@endsection
