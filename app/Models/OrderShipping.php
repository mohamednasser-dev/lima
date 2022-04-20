<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderShipping extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['date'];

    public const PENDING = 'pending';
    public const DELIVERED = 'delivered';

    /**
     * --------------------
     *  Relationships
     * --------------------
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    /**
     * --------------------
     *  Helpers
     * --------------------
     */
    public function isPending(): bool
    {
        return $this->status == self::PENDING;
    }


    public function scopePending($query)
    {
        return $query->whereStatus(self::PENDING);
    }
}
