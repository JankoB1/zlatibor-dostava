@extends('layouts.app')

@section('styles')
    <!-- Swipper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection

@section('content')
    <x-glavni-slider></x-glavni-slider>

    <div class="container">

        <div class="sve-kuhinje">
            <div class="row">
                @foreach($restorani as $restoran)
                    <div class="col-md-4">
                        <a href="{{ route('objekat', ['slug' => $restoran->slug]) }}">
                            <div class="slika-container">
                                <img src="{{ asset('images/objekti/' . $restoran->slug . '/cover.png') }}" alt="{{ $restoran->slug }}">
                                <h4>{{ $restoran->naziv }}</h4>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <x-footer></x-footer>
    @endsection

    @section('scriptsBottom')
        <!-- Swipper JS -->
            <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
            <script>
                var swiper = new Swiper(".mySwiper", {
                    pagination: {
                        el: ".swiper-pagination",
                        type: "progressbar",
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                    loop: true
                });
            </script>
@endsection
