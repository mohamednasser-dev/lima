<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SliderRequest extends FormRequest
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
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'body_ar' => 'required|string|max:900',
            'body_en' => 'required|string|max:900',
            'image' => [
                'required',
                'mimes:jpeg,jpg,png',
                Rule::requiredIf(function () {
                    return \Illuminate\Http\Request::routeIs('sliders.store');
                })
            ],
        ];
    }
}
