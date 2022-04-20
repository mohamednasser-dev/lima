<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $with = ['Product'];
    
    public function Product()
    {
        return $this->belongsTo(BrandProduct::class, 'product_id')->with('Brand');
    }
}
