@extends('layouts.common.base')

@section('title', '{{$product->name}}')
    
@section('content')
    <div class="product_container" style="background-color: green">

        <img src="{{asset('storage/products/'.$product->images->first()->name)}}">

        <p> {{$product->name}} </p>
        <p> {{$product->description}} </p>
        <p> {{$product->price}} </p>
        <p> {{$product->tipo}} </p>
        <p> {{$product->code}} </p>

        <form method="POST" action="{{route('product.delete', $product)}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="Borrar">
        </form>

    </div>
@endsection