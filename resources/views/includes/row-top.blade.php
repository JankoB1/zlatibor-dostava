<div class="row row-top">
    <div class="col-lg-6 prva">
        @guest
        @else
            <div class="adresa-container">
                <p>
                    <img src="{{ asset('images/site/home.svg') }}" width="25" alt="home-icon">
                    {{ Auth::user()->adresa }}
                    <img class="arrow-down" src="{{ asset('images/site/arrow-down-sign-to-navigate.svg') }}" width="20"
                         alt="arrow-down">
                    <a href="{{ route('user.prikazipromeniadresu') }}" class="promeni-adresu-link">
                        <span>Promeni Adresu</span>
                    </a>
                </p>
            </div>
        @endguest
    </div>
    <div class="col-lg-6">
        <div class="korpa-container">
            <a href="@if(Route::current()->getName() == 'porudzbina'){{ route('porudzbina.posalji', ['user' => Auth::user()]) }}@elseif(Route::current()->getName() == 'korpa'){{ route('porudzbina') }}@else{{ route('korpa') }} @endif">
                <p class="korpa-text"></p></a>
            <p class="korpa-cena">
                @if(\Illuminate\Support\Facades\Session::has('korpa'))
                    {{ $ukupnaCena }}
                @endif
            </p>
            <span class="valuta">RSD</span>

        </div>
    </div>
</div>
