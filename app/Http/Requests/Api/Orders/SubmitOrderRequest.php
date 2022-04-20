<?php

namespace App\Http\Requests\Api\Orders;

use App\Http\Requests\Api\ApiRequest;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class SubmitOrderRequest extends ApiRequest
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
            'address_id'     => 'required|exists:addresses,id',
            'shipping_type'  => ['required', Rule::in(Order::getShippingTypes())],
            'start_date'     => 'required|date|after:yesterday',
            'end_date'       => [
                'nullable',
                'date',
                'after:yesterday',
                Rule::requiredIf(function(){
                    return $this->shipping_type != Order::ONCE;
                })
            ],
            'shipping_count' => ['nullable', 'integer', 'min:2', 'max:30', Rule::requiredIf(function(){
                return $this->shipping_type !== Order::ONCE;
            })],
            'week_day' => [
                'nullable',
                Rule::in(Order::getWeekDays()),
                Rule::requiredIf(function(){
                    return $this->shipping_type === Order::WEEKLY;
                })
            ],
            'order_date'   => 'nullable|date',
            'user_id'      => 'required|integer',
            'uicode'       => 'nullable|string',
            'has_shipping' => 'nullable|boolean',
        ];
    }
    
    /**
     * prepareForValidation
     *
     * @return void
     */
    public function prepareForValidation()
    {
        $this->merge([
            'uicode'         => (string) Str::uuid(15),
            'user_id'        => apiUser()->id,
            'end_date'       => $this->calculateEndDate($this->shipping_type),
            'order_date'     => Carbon::now()->toDateString(),
            'week_day'       => $this->shipping_type == Order::WEEKLY ? $this->week_day : null,
            'has_shipping'   => $this->shipping_type !== Order::ONCE,
        ]);
    }
    
    /**
     * attributes
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            'address_id'     => __('lang.address'),
            'shipping_type'  => __('lang.shipping_type'),
            'start_date'     => __('lang.start_date'),
            'end_date'       => __('lang.end_date'),
            'shipping_count' => __('lang.shipping_count'),
            'week_day'       => __('lang.week_day'),
        ];
    }
    
    /**
     * calculateEndDate
     *
     * @param  mixed $shippingType
     * @return string
     */
    public function calculateEndDate($shippingType): ?string
    {
        $endDate = Carbon::make($this->start_date);

        switch ($shippingType) {
            case Order::DAILY:
                $endDate = $endDate->addDays(($this->shipping_count - 1));
                break;
            case Order::WEEKLY:
                $endDate = $endDate->addWeeks($this->shipping_count);
                break;

            case Order::MONTHLY:
                $endDate = $endDate->addMonths($this->shipping_count);
                break;
        }

        return $endDate->toDateString();
    }
}
