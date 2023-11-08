@extends('layouts.common.base')

@section('title', 'Registro')

@section('styles')

    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

@endsection

@section('content')

    <div class="container">
        
            <div class="container_form">

                <form action="{{route('store')}}" method="post">
                    @csrf
                                    
                    <h1> Registro </h1>

                    <label>Nombre: </label>
                    <input type="text" name="nombre" autofocus>
                    @error('nombre')
                        <p style="color:red"> {{ $message }} </p>
                    @enderror
                   
                    <label>Apellido: </label>
                    <input type="text" name="apellido">
                    @error('apellido')
                        <p style="color:red"> {{ $message }} </p>                   
                    @enderror
                   
                    <label>Segundo apellido: </label>
                    <input type="text" name="segundo_apellido">
                    @error('segundo_apellido')
                        <p style="color:red"> {{ $message }} </p>                      
                    @enderror
                    
                    <label>Edad: </label>
                    <input type="date" name="edad">
                    @error('edad')
                        <p style="color:red"> {{ $message }} </p>                       
                    @enderror
 
                    <label>Email: </label>
                    <input type="email" name="email">
                    @error('email')
                        <p style="color:red"> {{ $message }} </p>              
                    @enderror
                    
                    <label>Contraseña: </label>
                    <input type="password" name="password"> 
                    @error('password')
                        <p style="color:red"> {{ $message }} </p>                    
                    @enderror

                    <input type="submit" value="Aceptar">
                </form>
                
            </div>
    </div>

@endsection