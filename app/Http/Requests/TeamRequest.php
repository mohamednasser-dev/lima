<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;

class TeamRequest extends FormRequest
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
            'job_ar' => 'required|string|max:255',
            'job_en' => 'required|string|max:255',
            'image' => [
                'nullable',
                'image',
                'mimes:jpeg,jpg,png',
                Rule::requiredIf(function () {
                    return \Illuminate\Http\Request::routeIs('teams.store');
                })
            ],
        ];
    }
}
