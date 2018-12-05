@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($products as $product)
            <div class="card">
                <h3>{{$product->name}}</h3>
                <h4>€ {{$product->price}}</h4>
                <form action="/changeamount/{{$product->id}}">
                    <input type='number' value='{{$product->amount}}' name='quantity' min='0' max='99'>
                    <input type="submit" value="Submit">
                </form>
            </div>
        @endforeach
    </div>
@endsection