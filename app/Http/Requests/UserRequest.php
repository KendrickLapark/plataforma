<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => 'required|max:100|min:3',
            'apellido' => 'required|max:100|min:3',
            'segundo_apellido' => 'required|max:100|min:3',
            'edad' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:100|min:3'
        ];
    }

    public function messages(): array
{
    return [
        'nombre.required' => 'A title is required',
    ];
}
}
