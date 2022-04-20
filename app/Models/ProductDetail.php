<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['title', 'content'];

    public function getTitleAttribute()
    {
        if ($locale = \app()->getLocale() == "ar") {
            return $this->title_ar;
        } else {
            return $this->title_en;
        }
    }

    public function getContentAttribute()
    {
        if ($locale = \app()->getLocale() == "ar") {
            return $this->content_ar;
        } else {
            return $this->content_en;
        }
    }

    public function Product()
    {
        return $this->belongsTo(BrandProduct::class, 'product_id');
    }

}
