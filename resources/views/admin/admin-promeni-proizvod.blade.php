@extends('layouts.app')

@section('content')
    @if(\Illuminate\Support\Facades\Auth::user()->rola == 'admin')

        <p style="display: none;" id="varijacije-js">
            {{ $mapaVV }}
        </p>

        <div class="card-body forma-novi-proizvod">
            <form id="forma-login" method="POST"
                  action="{{ route('admin.proizvod.promeni', ['id' => $proizvod->id]) }}">
                @csrf
                @method('PATCH')

                <div class="form-group row mb-0">
                    <div class="col-md-12 offset-md-4">
                        <label for="naziv">Naziv Proizvoda</label>
                        <input id="naziv" type="text" class="form-control"
                               name="naziv" required autofocus value="{{ $proizvod->naziv }}">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12 offset-md-4">
                        <label for="opis" class="opis-proizvod">Opis Proizvoda</label>
                        <textarea name="opis" id="opis" cols="30" rows="5" value="{{ $proizvod->opis }}">{{ $proizvod->opis }}</textarea>
                    </div>
                </div>

                {{--                <div class="form-group row mb-0">--}}
                {{--                    <label for="slika">Slika Proizvoda</label>--}}
                {{--                    <input id="slika" name="slika" type="file">--}}
                {{--                </div>--}}

                <div class="form-group row mb-0">
                    <div class="col-md-12 offset-md-4">
                    <label for="kuhinja-proizvoda">Kuhinja Proizvoda</label>
                    <select name="kuhinja-proizvoda" id="kuhinja-proizvoda">
                        @foreach($kuhinje_proizvoda as $kuhinja_proizvoda)
                            @if($kuhinja_proizvoda->id == $proizvod->kuhinja_proizvoda_id)
                                <option selected
                                        value="{{ $kuhinja_proizvoda->naziv }}">{{ $kuhinja_proizvoda->naziv }}</option>
                            @else
                                <option value="{{ $kuhinja_proizvoda->naziv }}">{{ $kuhinja_proizvoda->naziv }}</option>
                            @endif
                        @endforeach
                    </select>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12 offset-md-4">
                    <label for="cena">Cena Proizvoda</label>
                    <input id="cena" name="cena" type="text" value="{{ $proizvod->cena }}">
                    </div>
                </div>

                <!-- PRILOZI -->
                <div class="form-group row mb-0 prilozi">
                    <label>Moguci Prilozi</label>
                    @foreach($prilozi as $prilog)
                        @if($proizvodPrilozi->contains('naziv', $prilog->naziv))
                            <div class="prilog-cont">
                                <input checked type="checkbox" name="prilog[]" value="{{ $prilog->naziv }}">
                                <label>{{ $prilog->naziv }}</label>
                                <input type="number" name="cena-priloga[]" id="cena-priloga" placeholder="Cena"
                                       value="{{ $proizvod->dohvatiCenuPriloga($prilog->id) }}">
                            </div>
                        @else
                            <div class="prilog-cont">
                                <input type="checkbox" name="prilog[]" value="{{ $prilog->naziv }}">
                                <label>{{ $prilog->naziv }}</label>
                                <input type="number" name="cena-priloga[]" id="cena-priloga" placeholder="Cena">
                            </div>
                        @endif
                    @endforeach
                </div>

                <!-- VARIJACIJE PROIZVODA -->
                <div class="form-group row mb-0 varijacije-proizvoda">
{{--                    @if($imaVarijacije)--}}
                        @foreach($proizvodVrsteVarijacija as $proizvodVrstaVarijacija)
                            <input name="vrsta-varijacije" type="text" value="{{ $proizvodVrstaVarijacija->naziv }}">
                            @foreach($proizvodVarijacije as $proizvodVarijacija)
                                @if($proizvodVrstaVarijacija->id == $proizvodVarijacija->vrsta_varijacije_id)
                                    <div class="varijacija-container-promeni">
                                        <input name="varijacija[]" type="text" value="{{ $proizvodVarijacija->naziv }}">
                                        <input type="number" name="cena-proizvoda-v[]" id="cena-priloga"
                                               placeholder="Cena"
                                               value="{{ $proizvod->dohvatiCenuVarijacije($proizvodVarijacija->id) }}">
                                    </div>
                                @endif
                            @endforeach
                        @endforeach
{{--                    @endif--}}
                </div>

                <!-- VARIJACIJE -->
                <div class="form-group row mb-0 varijacije">
                    <div class="col-md-12 offset-md-4">
                        <label>Dodati Varijacije</label>
                        <select name="vrsta-varijacije" id="vrsta-varijacije">
                            <option value="Izaberite vrstu varijacije" selected="selected">Izaberite vrstu varijacije
                            </option>
                            @foreach($vrsteVarijacija as $vrstaVarijacije)
                                <option value="{{ $vrstaVarijacije->naziv }}">{{ $vrstaVarijacije->naziv }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    {{ __('Ažuriraj proizvod') }}
                </button>
            </form>
        </div>
    @endif
@endsection

@section('scriptsBottom')
    <script type="text/javascript" src="{{ asset('js/noviProizvod.js') }}"></script>
@endsection
