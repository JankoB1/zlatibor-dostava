@extends('layouts.app')

@section('title')
Početna
@endsection

@section('content')
    <div class="container home">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="register-pocetak">
                    <h2>Prijavljeni ste</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button class="btn btn-primary"><a href="{{ route('pocetna') }}">Početna stranica</a></button>
                </div>
            </div>
        </div>
    </div>
@endsection
