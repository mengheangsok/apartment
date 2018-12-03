<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('/images/logo.png') }}" class="" width="50px"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                
                @if(session('local') == 'en')
                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-danger" href="{{ url('/config/change-local/kh') }}">KH</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-danger" href="{{ url('/config/change-local/en') }}">En</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/room') }}">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/category') }}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/customer') }}">Customers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/rent') }}">Rental</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/user') }}">Users</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{__('general.welcome') }} {{ Auth::user()->name }} 
                            
                            <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>