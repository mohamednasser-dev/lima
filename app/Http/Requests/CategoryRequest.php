<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'parent_id' => [
                'nullable',
                'exists:categories,id',
                Rule::requiredIf(function() {
                    return Request::routeIs('categories.create');
                })
            ],
            'image' => [
                'nullable',
                'image',
                'mimes:jpeg,jpg,png',
                Rule::requiredIf(function() {
                    return Request::routeIs('categories.create');
                })
            ],
        ];
    }
}
