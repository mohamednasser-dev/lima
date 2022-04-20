<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CouponRequest extends FormRequest
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
            'code' => 'required|regex:/(^[a-zA-Z]+[a-zA-Z0-9\\-]*$)/u|max:255',
            'type' => 'required|string|max:255|in:fixed,percent',
            'amount' => 'required|min:0',
            'min_order_total' => 'required|min:0|numeric',
            'expired_at' => 'required|after:'.Carbon::now(),
        ];
    }
}
