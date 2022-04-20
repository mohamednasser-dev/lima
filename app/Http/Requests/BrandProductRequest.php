<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BrandProductRequest extends FormRequest
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
            'count_ar' => 'required|string|max:255',
            'count_en' => 'required|string|max:255',
            'body_ar' => 'nullable|string',
            'body_en' => 'nullable|string',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric|min:0|max:100',
            'brand_id' => 'nullable',
            'rows' => 'nullable|array',
            'image' => [
                'nullable',
                'mimes:jpeg,jpg,png',
                Rule::requiredIf(function () {
                    return Request::routeIs('brand_products.store');
                })
            ],
        ];
    }
}
