<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    use HasFactory;
    protected $guarded = [];

    public function Images()
    {
        return $this->hasMany(BrandCertificate::class, 'brand_id', 'id');
    }

    public function Products()
    {
        return $this->hasMany(BrandProduct::class, 'brand_id', 'id');
    }
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    protected $appends = ['title'];
    public function getTitleAttribute()
    {
        if ($locale = \app()->getLocale() == "ar") {
            return $this->title_ar;
        } else {
            return $this->title_en;
        }
    }
}
