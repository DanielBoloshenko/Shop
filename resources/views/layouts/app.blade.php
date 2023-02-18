<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-xl navbar-light bg-white shadow-sm">
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

                    <div>
                        <a class="text-decoration-none text-dark me-4" href="{{ route('catalog') }}">Каталог</a>
                        <a class="text-decoration-none text-dark me-4" href="{{ route('catalog') }}">Каталог</a>
                        <a class="text-decoration-none text-dark me-4" href="{{ route('catalog') }}">Каталог</a>
                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        <form action="{{ route('search') }}" class="me-2">
                            <div class="input-group mb-3">
                                <input type="search" class="form-control" id="search" name="search" placeholder="Поиск..." aria-label="Поиск" aria-describedby="button-addon2">
                                <button class="btn btn-outline-dark" type="submit" id="button-addon2">Поиск</button>
                              </div>
                        </form>

                        <div class="dropdown mt-2 me-3">
                            <a class="dropdown-toggle text-decoration-none text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Меню
                            </a>

                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item active" href="{{ route('catalog') }}">Продукция и услуги</a></li>
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
                                    <a class="btn btn-outline-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-dark text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->email }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">Главная</a>
                                    <a class="dropdown-item" href="">Мои заказы</a>
                                    <a class="dropdown-item" href="">Мои данные</a>
                                    <a class="dropdown-item" href="{{ route('cartPage') }}">Моя корзина</a>
                                    <a class="dropdown-item" href="">Документы</a>
                                    <a class="dropdown-item" href="">Подача рекламаций</a>
                                    <a class="dropdown-item" href="">Сообщения</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выйти') }}
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

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
              <img src="" alt="">
            </a>
            <span class="mb-3 mb-md-0 mx-4"><b>Copy Star</b> 2022 Company, Inc</span>
          </div>
          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex mx-5">
            <li class="ms-3"><a class="text-muted" href="#"><img src="{{ asset('img/icons8-telegram-app-48.png') }}" width="24" height="24" alt=""></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><img src="{{ asset('img/icons8-vk-24 (1).png') }}" width="24" height="24" alt=""></a></li>
          </ul>
        </footer>
      </div>
</body>
</html>
