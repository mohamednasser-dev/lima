<?php

namespace App\Http\Resources\Dashboard;

use Illuminate\Http\Resources\Json\JsonResource;

class ShippingOrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'                   => (int) $this->id,
            'date'                 => $this->date->toDateString(),
            'status'               => $this->status,
            'order_uicode'         => $this->whenLoaded('order', fn() => $this->order->uicode),
            'order_total'          => $this->whenLoaded('order', fn() => $this->order->total),
            'order_start_date'     => $this->whenLoaded('order', fn() => $this->order->start_date->toDateString()),
            'order_end_date'       => $this->whenLoaded('order', fn() => $this->order->end_date->toDateString()),
            'order_shipping_count' => $this->whenLoaded('order', fn() => $this->order->shipping_count),
            'order_address'        => $this->whenLoaded('order', fn() => $this->order->address->full_address),
        ];
    }
}
