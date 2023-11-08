@extends('layouts.common.base')

@section('title', 'Create Product')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forms/create_product.css') }}">
@endsection

@section('content')

    <div class="container">

        <h1> Crear Producto </h1>

        <div class="container_form">

            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

                <label for="name"> Nombre </label>
                <input type="text" name="name">

                <label for="description"> Descripción </label>
                <input type="text" name="description">

                <label for="tipo"> Tipo </label>
                <input type="number" name="tipo">
                
                <label for="price"> Precio </label>
                <input type="number" name="price">

                <label for="images[]"> Imagenes </label>
                <input type="file" name="images[]" multiple>

                <input type="submit" value="Crear">
            
            </form>
        </div>
    </div>

@endsection