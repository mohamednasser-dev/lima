<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class subscription_typeRequest extends FormRequest
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
            'month_count' => 'required|numeric',
            'cost' => 'required|numeric',
        ];
    }
}
