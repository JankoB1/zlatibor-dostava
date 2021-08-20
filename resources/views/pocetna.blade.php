@extends('layouts.app')

@section('styles')
    <!-- Swipper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection

@section('content')
    <x-glavni-slider></x-glavni-slider>

    <div class="container">
        <div class="naruci-iz-prodavnice">
            <div class="swiper-container mySwiper2">
                <div class="swiper-wrapper">
                    @foreach($restorani as $restoran)
                        <div class="swiper-slide">
                            <img src="{{ asset('images/objekti/'. $restoran->slug . '/' . $restoran->slika) }}" alt="">
                            <h2>{{ $restoran->naziv }}</h2>
                            @foreach($restoran->getKuhinje as $kuhinja)
                                <span>{{ $kuhinja->naziv }}</span>
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
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

        var swiper2 = new Swiper(".mySwiper2", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endsection
