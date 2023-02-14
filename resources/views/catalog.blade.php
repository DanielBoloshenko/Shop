@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center mb-4">
    <h1>Категории</h1>
</div>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between">
            <a href="{{ route('category') }}" class="text-decoration-none text-dark">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/5hq.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title d-flex justify-content-center">Телефоны</h5>
                    </div>
                </div>
            </a>
            <a href="{{ route('category') }}" class="text-decoration-none text-dark">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/5hq.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title d-flex justify-content-center">Приставки</h5>
                    </div>
                </div>
            </a>
            <a href="{{ route('category') }}" class="text-decoration-none text-dark">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/5hq.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title d-flex justify-content-center">Аксессуары</h5>
                    </div>
                </div>
            </a>
            <a href="{{ route('category') }}" class="text-decoration-none text-dark">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/5hq.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title d-flex justify-content-center">Телевизоры</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection
