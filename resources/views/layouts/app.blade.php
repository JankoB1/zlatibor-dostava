<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Red Combi Dostava bavi se dostavljanjem hrane i pića na Zlatiboru. Svaka porudžbina će biti dostavljena do vašh vrata."></meta>

    <!-- Prevent Cache -->
{{--    <meta http-equiv="cache-control" content="max-age=0" />--}}
{{--    <meta http-equiv="cache-control" content="no-cache" />--}}
{{--    <meta http-equiv="cache-control" content="no-store" />--}}
{{--    <meta http-equiv="cache-control" content="must-revalidate" />--}}
{{--    <meta http-equiv="expires"       content="0" />--}}
{{--    <meta http-equiv="expires"       content="Tue, 01 Jan 1980 1:00:00 GMT" />--}}
{{--    <meta http-equiv="pragma"        content="no-cache" />--}}

    <title>@yield('title') - Red Combi Dostava</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZQYTXYRNPM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-ZQYTXYRNPM');
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <link rel="stylesheet" type="text/css" href="./style.css" />
    @yield('styles')
    @yield('scriptsTop')
</head>
<body>
<div id="app">

    <nav class="navbar navbar-expand-md navbar-light bg-white mobilni-navigacija">
        <div class="row top-navigacija">
            <div class="col-4 logo">
                <div class="logo-container">
                    <a href="{{ route('pocetna') }}">
                        <img src="{{ asset('images/site/logo.svg') }}" alt="red combi logo">
                    </a>
                </div>
            </div>
            <div class="col-4">
                <form class="forma-search" action="{{ route('search') }}" method="GET">
                    <input type="text" name="search" placeholder="Pretraga" required/>
                </form>
            </div>
            <div class="col-4 user-navigacija">
                @guest
                    @if (Route::has('login'))
                        <a class="prijavi-se-link" href="{{ route('login') }}">Prijavi se</a>
                    @endif

                @else

                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->dohvatiInicijale() }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                        @if(\Illuminate\Support\Facades\Auth::user()->rola == 'admin')
                            <a class="dropdown-item" href="{{ route('admin.promeniObjekat.prikazi') }}">Promeni objekat</a>
                            <a class="dropdown-item" href="{{ route('admin.proizvod.prikaziDodajNovi') }}">Dodaj proizvod</a>
                        @endif

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Odjavi se') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
                @endguest

            </div>
        </div>

        <div class="row bottom-navigacija">
            <div class="col-2 offset-2">
                <a href="{{ route('kuhinje') }}">
                    <img src="{{ asset('images/site/dostava-hrane.svg') }}" alt="">
{{--                    <p>Restorani</p>--}}
                </a>
            </div>
            <div class="col-2">
                <a href="{{ route('korpa') }}">
                    <img src="{{ asset('images/site/shopping-cart.png') }}" alt="" style="width: 40px; margin-left: 3px;">
{{--                    <p>Prodavnica</p>--}}
                </a>
            </div>
            <div class="col-2">
                <a href="{{ route('safe-driver') }}">
                    <img src="{{ asset('images/site/safe-driver.svg') }}" alt="">
{{--                    <p>Safe driver</p>--}}
                </a>
            </div>
            <div class="col-2">
                <a href="{{ route('o-nama') }}">
                    <img src="{{ asset('images/site/info.png') }}" alt="" style="width: 40px; margin-left: 3px;">
                    {{--                    <p>Safe driver</p>--}}
                </a>
            </div>
{{--            <div class="col-2">--}}
{{--                <a href="{{ route('priprema') }}">--}}
{{--                    <img src="{{ asset('images/site/apoteka.svg') }}" alt="">--}}
{{--                    <p>Apoteka</p>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-2">--}}
{{--                <a href="{{ route('priprema') }}">--}}
{{--                    <img class="pivo-slika" src="{{ asset('images/site/beer.svg') }}" alt="">--}}
{{--                    <p>Piće</p>--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>
    </nav>

    <nav class="desktop-navigacija">
        <div class="row">
            <div class="col-2 offset-2">
                <div class="logo-container">
                    <a href="{{ route('pocetna') }}">
                        <img src="{{ asset('images/site/logo.svg') }}" alt="red combi logo">
                    </a>
                </div>
            </div>
            <div class="col-3 piktogrami">
                <div class="piktogrami-cont">
                    <a href="{{ route('kuhinje') }}"><img src="{{ asset('images/site/dostava-hrane.svg') }}"
                                                          alt=""></a>
                    <a href="{{ route('priprema') }}"><img src="{{ asset('images/site/prodavnica.svg') }}" alt=""></a>
                    <a href="{{ route('priprema') }}"><img src="{{ asset('images/site/safe-driver.svg') }}" alt=""></a>
                    <a href="{{ route('priprema') }}"><img src="{{ asset('images/site/apoteka.svg') }}" alt=""></a>
                    <a href="{{ route('priprema') }}"><img class="pivo-slika" src="{{ asset('images/site/beer.svg') }}" alt=""></a>
                </div>
            </div>
            <div class="col-2 search-cont">
                <form class="forma-search" action="{{ route('search') }}" method="GET">
                    <input type="text" name="search" required/>
                </form>
            </div>
            <div class="col-2">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a href="{{ route('login') }}">Prijava</a>
                        </li>
                    @endif
                @else

                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->dohvatiInicijale() }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        @if(\Illuminate\Support\Facades\Auth::user()->rola == 'admin')
                            <a class="dropdown-item" href="{{ route('admin.promeniObjekat.prikazi') }}">Promeni objekat</a>
                            <a class="dropdown-item" href="{{ route('admin.proizvod.prikaziDodajNovi') }}">Dodaj proizvod</a>
                        @endif
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Odjavi se') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                @endguest
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>

{{-- Main JS --}}
<script src="{{ asset('js/main.js') }}" type="text/javascript"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@yield('scriptsBottom')
</body>
</html>
