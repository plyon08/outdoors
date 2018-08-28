<nav class="navbar navbar-collapse navbar-light navbar-laravel fixed-top links">
    <div class="container">
    @auth
        <div>
            <a href="{{ route('profile') }}">Welcome, {{ auth()->user()->name }}</a>
        </div>
    @else
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Outdoor Journal') }}
        </a>
    @endauth

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if (Route::has('login'))
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav text-right">
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('journal') }}">Journal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create') }}">Create Entry</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li> --}}
            @endauth
            </ul>
        </div>
        @endif
    </div>
</nav>