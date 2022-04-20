<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BrandRequest extends FormRequest
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
            'body_ar' => 'required|max:1000',
            'body_en' => 'required|max:1000',
            'vision_ar' => 'required|max:1000',
            'lat' => 'required',
            'lng' => 'required',
            'vision_en' => 'required|max:1000',
            'message_ar' => 'required|max:1000',
            'message_en' => 'required|max:1000',
            'min_order' => 'required|max:255|numeric',
            'city_id' => 'required|exists:cities,id',
            'cover' => [
                'nullable',
                'mimes:jpeg,jpg,png',
                Rule::requiredIf(function () {
                    return Request::routeIs('brands.store');
                })
            ],
            'image' => [
                'nullable',
                'mimes:jpeg,jpg,png',
                Rule::requiredIf(function () {
                    return Request::routeIs('brands.store');
                })
            ],
        ];
    }
}
