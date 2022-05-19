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

        if (Request('type') == 'video') {
            return [
                'type' => 'required|string|in:video,article',
                'name_ar' => 'required|string',
                'name_en' => 'required|string',
                'category_id' => 'required|exists:categories,id',
                'sub_category_id' => 'required|exists:categories,id',
                'sub_sub_category_id' => 'nullable|exists:categories,id',
                'video' => [
                    'nullable',
                    'mimes:mp4,mov,wmv,flv,avi,mkv,webm',
                    Rule::requiredIf(function () {
                        return Request::routeIs('posts.store');
                    })
                ],
                'image' => [
                    'nullable',
                    'image',
                    'mimes:jpeg,jpg,png',
                    Rule::requiredIf(function () {
                        return Request::routeIs('posts.store');
                    })
                ],
            ];
        } elseif (Request('type') == 'article') {
            return [
                'type' => 'required|string|in:video,article',
                'name_ar' => 'required|string',
                'name_en' => 'required|string',
                'body_ar' => 'required|string',
                'body_en' => 'required|string',
                'category_id' => 'required|exists:categories,id',
                'sub_category_id' => 'required|exists:categories,id',
                'sub_sub_category_id' => 'nullable|exists:categories,id',
                'image' => [
                    'nullable',
                    'image',
                    'mimes:jpeg,jpg,png',
                    Rule::requiredIf(function () {
                        return Request::routeIs('posts.store');
                    })
                ],
            ];
        }

    }
}
