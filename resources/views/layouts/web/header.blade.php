<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Anterin Sayur</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                <li class="nav-item cta cta-colored"><a href="{{url('web/cart')}}" class="nav-link">Cart <span class="icon-shopping_cart"></span></a></li>
                @if (Route::has('login'))
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="{{ route('logout') }}">{{ __('Logout') }}</a>
                        </div>
                    </li>
                    @else
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>