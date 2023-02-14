<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .dropdown-item.active {
            background: grey;
        }
    </style>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto me-4">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        <input type="search" placeholder="Поиск" class="form-control me-4">

                        <div class="dropdown mt-2 me-3">
                            <a class="dropdown-toggle text=decoration-none text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Меню
                            </a>

                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item active" href="#">Продукция и услуги</a></li>
                              <li><a class="dropdown-item" href="#">О компании</a></li>
                              <li><a class="dropdown-item" href="#">Стандарты качества</a></li>
                              <li><a class="dropdown-item" href="#">Клиентам и партнерам</a></li>
                              <li><a class="dropdown-item" href="#">Работа в компании</a></li>
                              <li><a class="dropdown-item" href="#">Контакты</a></li>
                              <li><a class="dropdown-item" href="#">Написать нам</a></li>
                            </ul>
                          </div>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item me-2">
                                    <a class="nav-link btn btn-outline-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-dark text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
            @yield('content')
        </main>
    </div>

    {{-- <footer class="border-top">
        <div class="row">
            <div class="d-flex">
                <b>Shop</b>
                <div>
                    <a href="">О компании</a>
                    <a href="">Клиентам и партнерам</a>
                    <a href="">Работа в компании</a>
                </div>
                <div class="text-end">
                    <img src="" alt="">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </footer> --}}
</body>
</html>
