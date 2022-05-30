<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:191|min:3',
            'city_id' => 'required|exists:cities,id',
//            'image' => 'nullable|mimes:jpeg,jpg,png',
//            'email' => [
//                'required',
//                'email',
//                'max:191',
//                Rule::unique('users', 'email')->ignore($this->route('id'))
//            ],
            'phone' => [
                'string',
                'required',
                'regex:/^([0-9\s\-\+\(\)]*)$/',
                'max:14',
                Rule::unique('users', 'phone')->ignore($this->route('id'))
            ],
            'password' => [
                'string',
                'nullable',
                'min:8',
                'max:100',
                'required_with:password_confirm',
                'confirmed',
                Rule::requiredIf(function() {
                    return Request::routeIs('users.store');
                })
            ],


        ];
    }
}
