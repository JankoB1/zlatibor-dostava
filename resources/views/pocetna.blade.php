@extends('layouts.app')

@section('styles')
    <!-- Swipper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection

@section('content')
    <x-glavni-slider></x-glavni-slider>

    <div class="container">

        <!-- Naruci iz prodavnice -->
        <div class="naruci-iz-prodavnice">
            <div class="swiper-container mySwiper2">
                <div class="swiper-wrapper">
                    @foreach($restorani as $restoran)
                        <div class="swiper-slide">
                            <a href="{{ route('objekat', ['slug' => $restoran->slug]) }}">
                                <img src="{{ asset('images/objekti/'. $restoran->slug . '/cover.png') }}" alt="{{ $restoran->slug }}">
                                <h2>{{ $restoran->naziv }}</h2>
                                @foreach($restoran->getKuhinje as $kuhinja)
                                    <span>{{ $kuhinja->naziv }}</span>
                                @endforeach
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>

            <!-- Specijalne ponude -->
            <div class="specijalne-ponude">
                <div class="swiper-container mySwiper3">
                    <div class="swiper-wrapper">
                        @foreach($restorani as $restoran)
                            <div class="swiper-slide">
                                <a href="{{ route('objekat', ['slug' => $restoran->slug]) }}">
                                    <img src="{{ asset('images/objekti/'. $restoran->slug . '/cover.png') }}" alt="{{ $restoran->slug }}">
                                    <h2>{{ $restoran->naziv }}</h2>
                                    @foreach($restoran->getKuhinje as $kuhinja)
                                        <span>{{ $kuhinja->naziv }}</span>
                                    @endforeach
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>

                <!-- Hrana blizu vas -->
                <div class="hrana-blizu-vas">
                    <div class="swiper-container mySwiper4">
                        <div class="swiper-wrapper">
                            @foreach($restorani as $restoran)
                                <div class="swiper-slide">
                                    <a href="{{ route('objekat', ['slug' => $restoran->slug]) }}">
                                        <img src="{{ asset('images/objekti/'. $restoran->slug . '/cover.png') }}" alt="{{ $restoran->slug }}">
                                        <h2>{{ $restoran->naziv }}</h2>
                                        @foreach($restoran->getKuhinje as $kuhinja)
                                            <span>{{ $kuhinja->naziv }}</span>
                                        @endforeach
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <!-- Novi restorani -->
                    <div class="novi-restorani">
                        <div class="swiper-container mySwiper5">
                            <div class="swiper-wrapper">
                                @foreach($restorani as $restoran)
                                    <div class="swiper-slide">
                                        <a href="{{ route('objekat', ['slug' => $restoran->slug]) }}">
                                            <img src="{{ asset('images/objekti/'. $restoran->slug . '/cover.png') }}" alt="{{ $restoran->slug }}">
                                            <h2>{{ $restoran->naziv }}</h2>
                                            @foreach($restoran->getKuhinje as $kuhinja)
                                                <span>{{ $kuhinja->naziv }}</span>
                                            @endforeach
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
        </div>
    </div>
    <x-footer></x-footer>
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
            slidesPerView: 3.5,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
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

        var swiper3 = new Swiper(".mySwiper3", {
            slidesPerView: 3.5,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
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

        var swiper4 = new Swiper(".mySwiper4", {
            slidesPerView: 3.5,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
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

        var swiper5 = new Swiper(".mySwiper5", {
            slidesPerView: 3.5,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
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
