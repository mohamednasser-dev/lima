<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $hidden = ['updated_at', 'created_at'];

    protected $appends = ['title','body'];


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
        if (\app()->getLocale() == "ar") {
            return $this->body_ar;
        } else {
            return $this->body_en;
        }
    }

    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/sliders') . '/' . $image;
        }
        return asset('default-image.png');
    }

    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $img_name = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/sliders/'), $img_name);
            $this->attributes['image'] = $img_name;
        } else {
            $this->attributes['image'] = $image;
        }
    }

}
