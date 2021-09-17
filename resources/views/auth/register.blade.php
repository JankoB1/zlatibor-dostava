@extends('layouts.app')

@section('content')
    <div class="container-fluid register">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="register-pocetak">
                    <h2>Registruj se</h2>
                </div>

                <div class="card-body">
                    <form id="forma-registracija" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="ime_i_prezime"
                                   class="col-md-12 col-form-label text-md-left">{{ __('Ime i Prezime') }}</label>

                            <div class="col-md-12">
                                <input id="ime_i_prezime" type="text"
                                       class="form-control @error('ime_i_prezime') is-invalid @enderror"
                                       name="ime_i_prezime" value="{{ old('ime_i_prezime') }}" required
                                       autocomplete="ime_i_prezime" autofocus>

                                @error('ime_i_prezime')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adresa" class="col-md-12 col-form-label text-md-left">{{ __('Adresa') }}</label>

                            <div class="col-md-12">
                                <input id="adresa" type="text"
                                       class="form-control @error('adresa') is-invalid @enderror"
                                       name="adresa" value="{{ old('adresa') }}" required autocomplete="adresa"
                                       autofocus>
                                @error('adresa')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apartman"
                                   class="col-md-12 col-form-label text-md-left">{{ __('Apartman (opciono)') }}</label>

                            <div class="col-md-12">
                                <input id="apartman" type="text"
                                       class="form-control @error('apartman') is-invalid @enderror" name="apartman"
                                       value="" autocomplete="apartman" autofocus>

                                @error('apartman')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefon"
                                   class="col-md-12 col-form-label text-md-left">{{ __('Telefon') }}</label>

                            <div class="col-md-12">
                                <input id="telefon" type="tel"
                                       class="form-control @error('telefon') is-invalid @enderror"
                                       name="telefon" value="{{ old('telefon') }}" required autocomplete="telefon"
                                       autofocus>

                                @error('telefon')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-12 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-12 col-form-label text-md-left">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required
                                       autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                   class="col-md-12 col-form-label text-md-left">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registruj se') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
