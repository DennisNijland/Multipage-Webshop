@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Products index</h1>
	<div class="card-deck">
		@foreach ($products as $product)
			<div class="card">
				<img class="card-img-top" src="..." alt="Card image cap">
				<div class="card-body">
					<h2 class="card-title">{{ $product->Name}}</h2>
					<p class="card-text">{{ $product->Description }}</p>
					<h5 class="card-price">{{ $product->Price }}</h5>
					<a href="#" class="btn btn-primary">Add to cart</a>
				</div>
			</div>
		@endforeach
	</div>
</div>
@endsection