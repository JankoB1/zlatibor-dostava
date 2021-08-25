@extends('layouts.app')

@section('styles')
    <!-- Swipper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
@endsection

@section('content')
    <x-mobnav></x-mobnav>
    <x-glavni-slider></x-glavni-slider>

    <div class="container-fluid pocetna">
        @if(\Illuminate\Support\Facades\Session::has('korpa'))
            {{ json_encode(\Illuminate\Support\Facades\Session::get('korpa')) }}
        @endif

        <div class="text-i-adresa-container">
            <h4>Restaurants, Groceries,<br> Your Cars and <span>more</span>, delivered to your door!</h4>
            <input type="text">
        </div>

        <!-- Naruci iz prodavnice -->
        <div class="naruci-iz-prodavnice slider-objekti">
            <h4>Orders from shop</h4>
            <div class="crvena-linija"></div>
            <div class="swiper-container mySwiper2">
                <div class="swiper-wrapper">
                    @foreach($restorani as $restoran)
                        <div class="swiper-slide">
                            <a href="{{ route('objekat', ['slug' => $restoran->slug]) }}">
                                <img src="{{ asset('images/objekti/'. $restoran->slug . '/cover.png') }}"
                                     alt="{{ $restoran->slug }}">
                                <p>{{ $restoran->naziv }}</p>
                                <div class="kuhinje">
                                    @foreach($restoran->getKuhinje as $kuhinja)
                                        <span>{{ $kuhinja->naziv }}</span>
                                    @endforeach
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- Specijalne ponude -->
        <div class="specijalne-ponude slider-objekti">
            <h4>Special offers</h4>
            <div class="crvena-linija"></div>
            <div class="swiper-container mySwiper3">
                <div class="swiper-wrapper">
                    @foreach($restorani as $restoran)
                        <div class="swiper-slide">
                            <a href="{{ route('objekat', ['slug' => $restoran->slug]) }}">
                                <img src="{{ asset('images/objekti/'. $restoran->slug . '/cover.png') }}"
                                     alt="{{ $restoran->slug }}">
                                <p>{{ $restoran->naziv }}</p>
                                <div class="kuhinje">
                                    @foreach($restoran->getKuhinje as $kuhinja)
                                        <span>{{ $kuhinja->naziv }}</span>
                                    @endforeach
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- Hrana blizu vas -->
        <div class="hrana-blizu-vas slider-objekti">
            <h4>Food near you</h4>
            <div class="crvena-linija"></div>
            <div class="swiper-container mySwiper4">
                <div class="swiper-wrapper">
                    @foreach($restorani as $restoran)
                        <div class="swiper-slide">
                            <a href="{{ route('objekat', ['slug' => $restoran->slug]) }}">
                                <img src="{{ asset('images/objekti/'. $restoran->slug . '/cover.png') }}"
                                     alt="{{ $restoran->slug }}">
                                <p>{{ $restoran->naziv }}</p>
                                <div class="kuhinje">
                                    @foreach($restoran->getKuhinje as $kuhinja)
                                        <span>{{ $kuhinja->naziv }}</span>
                                    @endforeach
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- Novi restorani -->
        <div class="novi-restorani slider-objekti">
            <h4>Categories</h4>
            <div class="crvena-linija"></div>
            <div class="swiper-container mySwiper5">
                <div class="swiper-wrapper">
                    @foreach($restorani as $restoran)
                        <div class="swiper-slide">
                            <a href="{{ route('objekat', ['slug' => $restoran->slug]) }}">
                                <img src="{{ asset('images/objekti/'. $restoran->slug . '/cover.png') }}"
                                     alt="{{ $restoran->slug }}">
                                <p>{{ $restoran->naziv }}</p>
                                <div class="kuhinje">
                                    @foreach($restoran->getKuhinje as $kuhinja)
                                        <span>{{ $kuhinja->naziv }}</span>
                                    @endforeach
                                </div>
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

        var swiper2 = new Swiper(".mySwiper2", {
            slidesPerView: 2.5,
            spaceBetween: 10,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            loop: true
        });

        var swiper3 = new Swiper(".mySwiper3", {
            slidesPerView: 2.5,
            spaceBetween: 10,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            loop: true
        });

        var swiper4 = new Swiper(".mySwiper4", {
            slidesPerView: 2.5,
            spaceBetween: 10,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            loop: true
        });

        var swiper5 = new Swiper(".mySwiper5", {
            slidesPerView: 2.5,
            spaceBetween: 10,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            loop: true
        });

    </script>
@endsection
