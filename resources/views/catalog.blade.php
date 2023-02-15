@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center mb-4">
    <h1>Категории</h1>
</div>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between">
            <a href="{{ request()->fullUrlWithQuery(['category' => 'phones']) }}" class="text-decoration-none text-dark">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/5hq.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center">Телефоны</h5>
                    </div>
                </div>
            </a>
            <a href="{{ request()->fullUrlWithQuery(['category' => 'consoles']) }}" class="text-decoration-none text-dark">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/5hq.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center">Приставки</h5>
                    </div>
                </div>
            </a>
            <a href="{{ request()->fullUrlWithQuery(['category' => 'accessories']) }}" class="text-decoration-none text-dark">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/5hq.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center">Аксессуары</h5>
                    </div>
                </div>
            </a>
            <a href="{{ request()->fullUrlWithQuery(['category' => 'laptops']) }}" class="text-decoration-none text-dark">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/5hq.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center">Ноутбуки</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="d-flex justify-content-between mt-5">
            @forelse ($products as $p)
                    <a href="{{ route('details', $p->id) }}" class="text-decoration-none text-dark">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/'.$p->img) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $p->name }}</h5>
                                <p class="card-text">{{ $p->text }}</p>
                                <div class="row">
                                    <div class="d-flex justify-content-between">
                                        <strong>{{ $p->price }} ₽</strong><a href="#" class="btn btn-dark">В корзину</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @empty
                    <p>no items</p>
            @endforelse
        </div>
    </div>
</div>

@endsection
