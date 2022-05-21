<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $guarded = [''];

    protected $appends = ['title', 'job'];

    public function getTitleAttribute()
    {
        if (\app()->getLocale() == "ar") {
            return $this->title_ar;
        } else {
            return $this->title_en;
        }
    }

    public function getJobAttribute()
    {
        if (\app()->getLocale() == "ar") {
            return $this->job_ar;
        } else {
            return $this->job_en;
        }
    }


    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/teams') . '/' . $image;
        }
        return asset('default-image.png');
    }

    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $img_name = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/teams/'), $img_name);
            $this->attributes['image'] = $img_name;
        } else {
            $this->attributes['image'] = $image;
        }
    }
}
