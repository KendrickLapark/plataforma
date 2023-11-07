@extends('layouts.common.base')

@section('title', 'products')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/_partials/product_card.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1> Productos </h1>
        <div class="container-bar">
            <form action="{{route('products.search')}}" method="POST">
                @csrf
                <input type="text" name="q">
                <input type="submit" value="Buscar"> 
            </form>
        </div>

        <a href="{{route('products.create')}}"> Crear producto </a>

        <ul class="product-list">
            @foreach ($products as $product)
                @include('layouts._partials.product_card')
            @endforeach
        </ul>
    </div>
@endsection