@extends('layouts.common.blade')

@section('title', 'Create Product')

@section('content')
    <form action="{{ route('product.store') }}">
    
        <h1> Crear Producto </h1>

        <label for="name">
            <input type="text" name="name">
        </label>

        <label for="description">
            <input type="text" name="description">
        </label>
        
        <label for="">
            <input type="number" name="price">
        </label>

        <input type="submit" value="Crear">
    
    </form>
@endsection