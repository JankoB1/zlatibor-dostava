@extends('layouts.app')

@section('title')
    Verifikacija
@endsection

@section('content')
    <div class="container-fluid verifikacija">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="login-pocetak">
                    <h2>Verifikovati email</h2>
                </div>


                    <div class="card-body verifikacija-card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Verifikacioni link je poslat na vašu email adresu.') }}
                            </div>
                        @endif

                        {{ __('Molimo vas da proverite da li vam je stigao link.') }}<br>
                        {{ __('Ako niste dobili email:') }}
                        <form id="forma-verifikacija" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                    class="btn btn-link p-0 m-0 align-baseline">{{ __('Kliknite ovde kako biste dobili novi link') }}</button>

                        </form>
                    </div>
            </div>
        </div>
    </div>
@endsection
