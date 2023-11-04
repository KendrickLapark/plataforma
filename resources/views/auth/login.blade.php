@extends('layouts.common.base')

@section('title', 'Iniciar sesión')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')

    <div class="container">
            
        <div class="container-form">

            <form action="{{route('login')}}" method="POST">
                    @csrf
                    
                <h1> Iniciar sesión </h1>
                <input type="email" name="email">
                <input type="password" name="password">
                <button type="submit"> Aceptar </button>
            </form>

        </div>
    </div>
@endsection