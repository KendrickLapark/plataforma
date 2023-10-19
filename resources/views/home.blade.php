@extends('layouts.common.base')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/_partials/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('title', 'Home')

@section('content')

    <div class="top_container">

        <img src="images/fondo_home.jpg">

    </div>

    <div class="center_container"> 
        <h1> Bienvenido a plataforma </h1>
    </div>

    <div class="botton_container"></div>

@endsection