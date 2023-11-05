@extends('layouts.common.base')

@section('title', 'products')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1> Productos </h1>
        <form action="{{route('products.search')}}" method="POST">
            @csrf
            <input type="text" name="q">
            <input type="submit" value="Buscar">

        </form>

        <a href="{{route('products.create')}}"> Crear producto </a>
    </div>
@endsection