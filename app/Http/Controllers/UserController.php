<?php

namespace App\Http\Controllers;
namespace App\Models\User;
namespace App\Http\Requests;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function store(UserRequest $request){

        User::create($request->all());
        
        return redirect()->route('register');

    }
    
}
