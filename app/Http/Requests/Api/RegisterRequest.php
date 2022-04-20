<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|string|email|max:100|unique:users,email',
            'phone' => 'required|string|unique:users,phone',
            'lat' => 'required|max:255',
            'lng' => 'required|max:255',
            'password' => 'required|string|confirmed|min:6',
        ];
    }
}
