@extends('layouts.common.base')

@section('title', 'Registro')

@section('styles')

    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

@endsection

@section('content')

    <div class="container">

        <h1> Registro </h1>

            <div class="container-form">

                <form method="POST" {{ route('store') }}>

                    @csrf
                    <label for="nombre"> Nombre </label>
                    <input type="text" name="nombre">

                    <label for="primer_apellido"> Primer apellido </label>
                    <input type="text" name="primer_apellido">

                    <label for="segundo_apellido"> Segundo apellido </label>
                    <input type="text" name="segundo_apellido">

                    <label for="email"> Email </label>
                    <input type="text" name="email">

                    <label for="contraseña"> Contraseña </label>
                    <input type="text" name="contraseña">

                    {{-- <label for="repetir_contraseña"> Repetir contraseña </label>
                    <input type="text" name="repetir_contraseña">
 --}}
                    <label for="edad"> Edad </label>
                    <input type="date" name="edad">

                    <label for="poblacion"> Población </label>
                    <input type="text" name="poblacion">

                    <label for="provincia"> Provincia </label>
                    <input type="text" name="provincia">

                    <label for="pais"> País </label>
                    <input type="text" name="pais">

                    <button type="submit" name="aceptar" value="aceptar"> Aceptar </button>
                    <button type="submit" name="atras" value="atras"> Atrás </button>

                </form>
                
            </div>

    </div>

@endsection