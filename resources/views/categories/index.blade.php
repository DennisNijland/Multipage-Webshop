@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Categories</h1>
	<div class="card-deck">
		@foreach ($categories as $category)
			<div class="card">
				<div class="card-body">
					<h2 class="card-title">{{ $category->category_name}}</h2>
                    <a href="#{{$category->id}}" class="btn btn-primary">View category</a>
				</div>
			</div>
		@endforeach
	</div>
</div>
@endsection