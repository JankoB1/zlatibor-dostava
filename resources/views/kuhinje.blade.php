@extends('layouts.app')

@section('styles')
    <!-- Swipper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
@endsection

@section('content')
    <x-glavni-slider></x-glavni-slider>

    <div class="container restorani-kuhinje">

        <div class="sve-kuhinje">
            <h4>Categories</h4>
            <div class="crvena-linija"></div>
            <div class="row">
                @foreach($kuhinje as $kuhinja)
                    <div class="col-4">
                        <a href="{{ route('restorani.kuhinja', ['slug' => $kuhinja->slug]) }}">
                            <div class="slika-container">
                                <img src="{{ asset('images/kuhinje/' . 'categories-'. $kuhinja->slug . '.png') }}"
                                     alt="{{ $kuhinja->slug }}">
                                <p>{{ $kuhinja->naziv }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="svi-restorani">
            <h4>All restaurants</h4>
            <div class="crvena-linija"></div>
            <div class="row">
                @foreach($restorani as $restoran)
                    <div class="col-12">
                        <div class="restoran">
                            <a href="{{ route('objekat', ['slug' => $restoran->slug]) }}">
                                <img src="{{ asset('images/objekti/' . $restoran->slug . '/cover.png') }}"
                                     alt="{{ $restoran->slug }}">
                                <h3 class="title-objekat">{{ $restoran->naziv }}</h3>
                                <p>{{ $restoran->opis }}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
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
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            loop: true
        });
    </script>
@endsection
