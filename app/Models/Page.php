<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getNameAttribute()
    {
        if ($locale = \app()->getLocale() == "ar") {
            return $this->name_ar;
        } else {
            return $this->name_en;
        }
    }
    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/pages') . '/' . $image;
        }
        return asset('default-image.png');
    }

//    public function setImageAttribute($image)
//    {
//        if (is_file($image)) {
//            $img_name = time() . uniqid() . '.' . $image->getClientOriginalExtension();
//            $image->move(public_path('/uploads/pages/'), $img_name);
//            $this->attributes['image'] = $img_name;
//        } else {
//            $this->attributes['image'] = $image;
//        }
//    }
}
