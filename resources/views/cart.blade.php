@extends('layouts.app')

@section('content')

<section class="h-100 h-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Корзина покупок</h1>
                                    </div>
                                    <hr class="my-4">

                                    @forelse ($products as $product_id => $product)
                                        @php
                                            $qty = $product['qty'];
                                            $product = $products[$product_id]['product'];
                                        @endphp
                                        @if ($product)

                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="d-flex col-md-2 col-lg-2 col-xl-2">
                                                    <img
                                                        src="{{ asset('img/'.$product->img) }}"
                                                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h6 class="text-black">{{ $product->name }}</h6>
                                                    <h6 class="text-muted mb-0">{{ $product->category }}</h6>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                    <form action="{{ route('deleteFromCart',$product->id) }}" method="post">
                                                        @csrf
                                                        <button class="btn btn-link px-2"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-dash" viewBox="0 0 16 16">
                                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                                        </svg>
                                                    </button>
                                                    </form>

                                                    <input id="form1" min="0" name="quantity" value="{{ $qty }}" type="number"
                                                        class="form-control form-control-sm">

                                                    <form action="{{ route('addToCart',$product->id) }}"method="post">
                                                        @csrf
                                                        <button class="btn btn-link px-2"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-plus" viewBox="0 0 16 16">
                                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                        </svg>
                                                    </button>
                                                    </form>
                                                </div>
                                                <div class="d-flex col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0 mt-2 align-middle text-nowrap me-2ssh">{{ $product->price * $qty }} ₽</h6>
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                                </div>
                                            </div>
                                        @endif
                                        @empty
                                            <h2>Добавьте товар в корзину</h2>
                                    @endforelse

                                    <hr class="my-4">

                                    <div class="pt-5 align-text-bottom">
                                        <h6 class="mb-0"><a href="{{ route('catalog') }}" class="text-body"><i
                                            class="fas fa-long-arrow-alt-left me-2"></i>Вернуться в магазин</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 bg-grey">
                                <div class="p-5">
                                    <h3 class="fw-bold mb-5 mt-2 pt-1">Итого</h3>
                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-4">
                                        {{-- <h5 class="text-uppercase">@if($qty >= 1) {{ $qty }} товара @else 0 товаров @endif</h5> --}}
                                        <h5 class="text-uppercase">3 товара</h5>
                                        <h5>{{ $product->price * $qty }}</h5>
                                    </div>

                                    <h5 class="text-uppercase mb-3">Доставка</h5>

                                    <div class="mb-4 pb-2">
                                        <select class="select">
                                            <option value="1">Стандартная доставка - ₽500.00</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                        </select>
                                    </div>

                                    <h5 class="text-uppercase mb-3">Промокод</h5>

                                    <div class="mb-5">
                                        <div class="form-outline">
                                            <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Examplea2">Введите свой код</label>
                                        </div>
                                    </div>

                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-5">
                                        <h5 class="text-uppercase">Итоговая цена</h5>
                                        <h5>₽ 30500.00</h5>
                                    </div>

                                    <button type="button" class="btn btn-dark btn-block btn-lg"
                                        data-mdb-ripple-color="dark">Оформить</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
