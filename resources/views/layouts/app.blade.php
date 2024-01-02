<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Donat Kawan Mamak') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <style>
    body {
        background-color: #ffffff;
        font-family: 'Arial', sans-serif;
    }

    .navbar {
        background: linear-gradient(to right, #fd79a8, #0984e3);
    }

    .navbar-brand {
        color: #000;
    }

    .navbar-toggler-icon {
        background-color: #ffffff;
    }

    .navbar-light .navbar-nav .nav-link {
        color: #000000;
        transition: color 0.3s ease;
    }

    .navbar-light .navbar-nav .nav-link:hover {
        color: #000000;
    }

    .navbar-light .navbar-nav .nav-item.active .nav-link {
        color: #ffffff;
    }

    .navbar-light .navbar-nav .nav-item.dropdown:hover .nav-link {
        color: #ffffff;
    }

    .navbar-light .navbar-nav .nav-item.dropdown .dropdown-menu {
        background: linear-gradient(to right, #ff6b81, #74b9ff);
        color: #ffffff;
        border: 1px solid #ffffff;
    }

    .navbar-light .navbar-nav .nav-item.dropdown .dropdown-menu a {
        color: #ffffff;
    }

    .navbar-light .navbar-nav .nav-item.dropdown .dropdown-menu a:hover {
        background-color: #ffffff;
        color: #000000;
    }

    .py-4 {
        background-color: #ffffff;
    }

    .container {
        background: linear-gradient(to right, #ffffff, #f0f0f0);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 20px;
        margin-top: 20px;
    }

    .custom-container {
        /* Gaya khusus untuk kontainer ini */
        background-color:#ffffff;
        padding: 10px;
        border: 0px solid #ccc;
        /* Tambahkan properti CSS lainnya sesuai kebutuhan Anda */
    }
</style>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
            <img src="{{ asset('donat.png') }}" alt="donat Logo" class="img-fluid mr-2" style="height: 30px;">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Donat Kawan Mamak
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/donat') }}">Donat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/pelanggan') }}">Pelanggan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/penjualan') }}">Penjualan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/users') }}">User</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
        <div class="custom-container">
            @yield('content')
        </div>

        </main>
    </div>
</body>

</html>
