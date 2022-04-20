<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductDetailsResources extends JsonResource
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
            'id' => $this->id,
            'image' => asset('/').$this->image,
            'title' => $this->title,
            'count' => $this->count,
            'body' => $this->body,
            'price' => $this->price,
            'discount' => $this->discount,
            'price_after_discount' => $this->price_offer ,
            'details' => $this->Details ,
        ];
    }
}
