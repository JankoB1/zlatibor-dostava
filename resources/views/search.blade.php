@extends('layouts.app')

@section('title')
    Pretraga
@endsection

@section('styles')
    <!-- Swipper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection

@section('content')

    @include('includes.row-top')

    <x-glavni-slider></x-glavni-slider>

    <div class="container kuhinja-stranica">

        <div class="sve-kuhinje">
            <div class="row">
                @foreach($restorani as $restoran)
                    <div class="col-12">
                        <div class="restoran">
                            <a href="{{ route('objekat', ['slug' => $restoran->slug]) }}">
                                <img src="{{ asset('images/objekti/' . $restoran->slug . '/cover.png') }}"
                                     alt="{{ $restoran->slug }}">
                                <h3 class="title-objekat">{{ $restoran->naziv }}</h3>
                                <p class="vreme-dostave">30-60<br>min</p>
                                <p>{{ $restoran->opis }}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <x-footer></x-footer>
    @endsection

    @section('scriptsBottom')
        <!-- Swipper JS -->
            <script src="{{ asset('js/pocetna.js') }}" type="text/javascript"></script>
            <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
            <script>
                let swiper = new Swiper(".mySwiper", {
                    pagination: {
                        el: ".swiper-pagination",
                    },
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    loop: true
                });
            </script>
@endsection
