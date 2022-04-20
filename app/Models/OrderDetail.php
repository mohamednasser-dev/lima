<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $with = ['product'];

    
    /**
     * --------------------
     * Relationships
     * --------------------
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(BrandProduct::class, 'product_id');
    }
}
