@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail page</h1>
        <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">{{ $products->name}}</h2></a>
                        <h5 class="card-subtitle">{{ $products->category_name }}</h3>
                            <p class="card-text">{{ $products->description }}</p>
                            <h5 class="card-price">{{ $products->price }}</h5>
                            <a href="#{{$products->id}}" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
        </div>
    </div>

@endsection
