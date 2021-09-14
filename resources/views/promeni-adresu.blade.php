@extends('layouts.app')

@section('content')
    <div class="container-fluid adresa">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="login-pocetak">
                    <h2>Promenite adresu</h2>
                </div>

                <div class="card-body">
                    <form action="{{ route('user.promeniadresu', ['user' => Auth::user()]) }}" method="post" id="forma-adresa">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="nova-adresa" class="col-md-12 col-form-label text-md-left">Nova
                                    adresa</label>
                                <input id="nova-adresa" name="nova-adresa" type="text"
                                       class="form-control" value="{{ Auth::user()->adresa }}"
                                       required autofocus>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Promeni adresu') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

