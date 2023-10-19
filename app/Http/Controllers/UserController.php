<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function register(){

        return view('register');

    }

    public function store(UserRequest $request)
    {
        $user = User::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'segundo_apellido' => $request->segundo_apellido,
            'edad' => $request->edad,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if($user){ 
            return redirect()->route('home')->with('status', 'Usuario creado con éxito');
        }

            return redirect()->route('home')->with('status', 'Error en la creación de usuario');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
    
}
