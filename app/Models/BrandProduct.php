<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandProduct extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $appends = ['title', 'count', 'body', 'price_offer'];

    public function getTitleAttribute()
    {
        if ($locale = \app()->getLocale() == "ar") {
            return $this->title_ar;
        } else {
            return $this->title_en;
        }
    }

    public function getBodyAttribute()
    {
        if ($locale = \app()->getLocale() == "ar") {
            return $this->body_ar;
        } else {
            return $this->body_en;
        }
    }

    public function getCountAttribute()
    {
        if ($locale = \app()->getLocale() == "ar") {
            return $this->count_ar;
        } else {
            return $this->count_en;
        }
    }

    public function getPriceOfferAttribute()
    {
        $discount_amount = $this->price * $this->discount / 100;
        $final_price = $this->price - $discount_amount;
        return (double)number_format((float)$final_price, 2, '.', '');
    }

    public function Details()
    {
        return $this->hasMany(ProductDetail::class, 'product_id', 'id');
    }


    public function Brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }



}
