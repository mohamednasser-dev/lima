<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screen extends Model
{
    use HasFactory;
    protected $guarded = [''];
    protected $appends = ['title', 'body'];

    public function getTitleAttribute()
    {
        if (\app()->getLocale() == "ar") {
            return $this->title_ar;
        } else {
            return $this->title_en;
        }
    }

    public function getBodyAttribute()
    {
        if (\app()->getLocale() == "ar") {
            return $this->body_ar;
        } else {
            return $this->body_en;
        }
    }



//    public function setImageAttribute($image)
//    {th
//        if (is_file($image)) {
//            $imageFields = upload($image, 'Screen');
//            $this->attributes['file'] = $imageFields;
//        }
//
//    }
}
