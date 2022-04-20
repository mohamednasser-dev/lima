<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if($this->Product->discount > 0){
            $total =  $this->quantity * $this->Product->price_offer ;
        }else{
            $total =  $this->quantity * $this->Product->price ;

        }
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'BrandTitle' => $this->Product->Brand->title,
            'BrandImage' => asset('/').$this->Product->Brand->image,
            'lng' => $this->Product->Brand->lng,
            'lat' => $this->Product->Brand->lat,
            'quantity' => $this->quantity,
            'brandsMinimumOrder' => $this->Product->Brand->min_order,
            'total' => $total,
//            'price_after_discount' => $this->Product->price_offer ,
//            'image' => $this->Product->image,
//            'title' => $this->Product->title,
//            'count' => $this->Product->count,
//            'price' => $this->Product->price,
//            'discount' => $this->Product->discount,
//            'quantity' => $this->quantity,
        ];
    }
}
