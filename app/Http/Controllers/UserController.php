<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    
    public function store(Request $request){


        User::create($request->all());
        
        return redirect()->route('register')->withErrors(['message' => 'Error al crear usuario']);

    }
    
}
