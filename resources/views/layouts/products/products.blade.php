@extends('layouts.common.base')

@section('title', 'products')

@section('content')
    <h1> Productos </h1>
    <form action="{{route('products.search')}}" method="POST">
        @csrf
        <input type="text" name="q">
        <input type="submit" value="Buscar">

    </form>

    <a href="{{route('product.create')}}"></a>
@endsection