@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center mb-4">
    <h1 class="fw-bold">Категории</h1>
</div>
<div class="container">
    <div class="row">
        <div class="d-flex flex-wrap justify-content-between">
            <a href="{{ request()->fullUrlWithQuery(['category' => 'accessories']) }}" class="text-decoration-none text-dark">
                <div id="category" name="category" class="card d-flex flex-column justify-content-between" style="width: 18rem; height: 100%;">
                    <div style="width: 286px;">
                        <img src="{{ asset('img/iphone.jpg') }}" class="card-img-top overflow-hidden" style="width: 100%;" alt="...">
                    </div>
                    <h5 class="card-title d-flex justify-content-center fw-bold fs-3 mb-2">Телефоны</h5>
                </div>
            </a>
            <a href="{{ request()->fullUrlWithQuery(['category' => 'accessories']) }}" class="text-decoration-none text-dark">
                <div id="category" name="category" class="card d-flex flex-column justify-content-between" style="width: 18rem; height: 100%;">
                    <div style="width: 286px;">
                        <img src="{{ asset('img/ps5.jpg') }}" class="card-img-top overflow-hidden" style="width: 100%;" alt="...">
                    </div>
                    <h5 class="card-title d-flex justify-content-center fw-bold fs-3 mb-2">Приставки</h5>
                </div>
            </a>
            <a href="{{ request()->fullUrlWithQuery(['category' => 'accessories']) }}" class="text-decoration-none text-dark">
                <div id="category" name="category" class="card d-flex flex-column justify-content-between" style="width: 18rem; height: 100%;">
                    <div style="width: 286px;">
                        <img src="{{ asset('img/ps5gp.webp') }}" class="card-img-top overflow-hidden" style="width: 100%;" alt="...">
                    </div>
                    <h5 class="card-title d-flex justify-content-center fw-bold fs-3 mb-2">Аксессуары</h5>
                </div>
            </a>
            <a href="{{ request()->fullUrlWithQuery(['category' => 'accessories']) }}" class="text-decoration-none text-dark">
                <div id="category" name="category" class="card d-flex flex-column justify-content-between" style="width: 18rem; height: 100%;">
                    <div style="width: 286px;">
                        <img src="{{ asset('img/macbook.jpg') }}" class="card-img-top overflow-hidden" style="width: 100%;" alt="...">
                    </div>
                    <h5 class="card-title d-flex justify-content-center fw-bold fs-3 mb-2">Ноутбуки</h5>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="container border-bottom mt-5">
    <div class="row mb-2">
        <div class="col">
            <img class="me-2" src="media/img/filter-results-button.png" width="16" height="16" alt=""><a href="" class="text-decoration-none text-dark">Фильтры</a>
        </div>
        <div class="col text-end">
            <div class="dropdown">
                <a class="dropdown-toggle text-decoration-none text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Популярные
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['field' => 'name', 'order' => 'asc']) }}">Название по возрастанию</a></li>
                  <li><a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['field' => 'name', 'order' => 'desc']) }}">Название по убыванию</a></li>
                  <li><a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['field' => 'price', 'order' => 'asc']) }}">Цена по возрастанию</a></li>
                  <li><a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['field' => 'price', 'order' => 'desc']) }}">Цена по убыванию</a></li>
                  <li><a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['field' => null, 'order' => null]) }}">Сбросить сортировку</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
        @forelse($products as $p)
            <div class="col">
                <div class="card h-100">
                    <a href="{{ route('details', $p->id) }}"><img src="{{ asset('img/'.$p->img) }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $p->name }}</h5>
                    </div>
                    <form action="{{ route('addToCart', $p->id) }}" method="POST" class="card-footer d-flex justify-content-between mt-auto">
                        @csrf
                        <strong class="mt-2">{{ $p->price }} ₽</strong><div class="mt-2 text-muted">{{ $p->count }} шт.</div><button type="submit" class="btn btn-dark">В корзину</button>
                    </form>
                </div>
            </div>
        @empty
            <h2 class="text-center">Товар скоро появится в наличии</h2>
        @endforelse
      </div>
</div>

@endsection
