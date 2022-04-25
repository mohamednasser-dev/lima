<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $appends = ['name','body','type_name'];

    public function getNameAttribute()
    {
        if (\app()->getLocale() == "ar") {
            return $this->name_ar;
        } else {
            return $this->name_en;
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

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeFree($query)
    {
        return $query->where('free', 1);
    }

    public function getTypeNameAttribute()
    {
        if ($this->type == 'video') {
            return trans('lang.video');
        } elseif ($this->type == 'article') {
            return trans('lang.article');
        } elseif ($this->type == 'voice') {
            return trans('lang.voice');
        }
    }

    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/posts') . '/' . $image;
        }
        return asset('default-image.png');
    }

    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $img_name = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/posts/'), $img_name);
            $this->attributes['image'] = $img_name;
        } else {
            $this->attributes['image'] = $image;
        }
    }
}
