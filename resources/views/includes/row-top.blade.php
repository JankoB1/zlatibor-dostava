<div class="row row-top">
    <div class="col-lg-6 prva">
        @guest
        @else
            <div class="adresa-container">
                <p><img src="{{ asset('images/site/home.svg') }}" width="25" alt="home-icon">{{ Auth::user()->adresa }}</p>
            </div>
        @endguest
    </div>
    @if(Session::has('korpa'))
        <div class="col-lg-6">
            <div class="korpa-container">
                <a href="@if(Route::current()->getName() == 'korpa'){{ route('porudzbina.posalji', ['user' => Auth::user()]) }}@else{{ route('korpa') }} @endif"><p class="korpa-text"></p></a>
                <p class="korpa-cena">{{ $ukupnaCena }}</p>
                <span class="valuta">RSD</span>
            </div>
        </div>
    @endif
</div>
