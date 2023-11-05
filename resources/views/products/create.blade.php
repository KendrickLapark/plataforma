@extends('layouts.common.base')

@section('title', 'Create Product')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')

    <div class="container">
        <form action="{{ route('products.store') }}">
        
            <h1> Crear Producto </h1>

            <label for="name"> Nombre </label>
                <input type="text" name="name">

            <label for="description"> Descripción </label>
                <input type="text" name="description">
            
            <label for="price"> Precio </label>
                <input type="number" name="price">

            <input type="submit" value="Crear">
        
        </form>
    </div>

@endsection