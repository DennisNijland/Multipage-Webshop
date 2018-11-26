@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Products index</h1>
	<div class="card-deck">
		@foreach ($products as $product)
			<div class="card">
				<img class="card-img-top" src="https://via.placeholder.com/250x200.png" alt="Card image cap">
				<div class="card-body">
					<a href="/product/{{$product->id}}"><h2 class="card-title">{{ $product->name}}</h2></a>
					<h5 class="card-subtitle">{{ $product->category_name }}</h3>
					<p class="card-text">{{ $product->description }}</p>
					<h5 class="card-price">€ {{ $product->price }}</h5>
					<a href="cart/add/{{$product->id}}" class="btn btn-primary">Add to cart</a>
				</div>
			</div>
		@endforeach
	</div>
</div>
@endsection