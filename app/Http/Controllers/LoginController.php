<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function doLogin(LoginRequest $request)
    {
        if(Auth::attempt($request->only('email', 'password'))){
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('status', 'Logeado con éxito');
        }
        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken(); 
        
        return redirect()->route('home')->with('status', 'Sesión cerrada');
    }
}
