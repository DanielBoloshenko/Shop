@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-between">
                @foreach ($products as $p)
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
                @endforeach
            </div>
        </div>
    </div>
@endsection
