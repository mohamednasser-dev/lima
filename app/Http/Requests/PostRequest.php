<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
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
            'category_id' => 'required|exists:categories,id',
            'sub_category_id' => 'required|exists:categories,id',
            'sub_sub_category_id' => 'nullable|exists:categories,id',
            'video' => [
                'nullable',
                'mimes:mp4,mov,wmv,flv,avi,mkv,webm',
                Rule::requiredIf(function() {
                    return Request::routeIs('posts.create');
                })
            ],
            'image' => [
                'nullable',
                'image',
                'mimes:jpeg,jpg,png',
                Rule::requiredIf(function() {
                    return Request::routeIs('posts.create');
                })
            ],
        ];
    }
}
