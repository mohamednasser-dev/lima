<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = [
        'order_date',
        'start_date',
        'end_date',
    ];

    public const ONCE = 'once';
    public const DAILY = 'daily';
    public const WEEKLY = 'weekly';
    public const MONTHLY = 'monthly';

    // Order status
    public const PENDING = 'pending';
    public const ACCEPTED = 'accepted';
    public const REJECTED = 'rejected';
    public const DELIVERED = 'delivered';
    public const FINISHED = 'finished';

    // Payment types
    public const CASH = 'cash';
    public const CARD = 'card';

    // Payment status
    public const PAID = 'paid';
    public const UNPAID = 'unpaid';



    public static function booted()
    {
        static::created(function (Order $order) {
            if (!$order->isShippingOnce()) {
                $shippings = $order->scheduleShippingsOfRepeatedOrder();
                $order->shipments()->saveMany($shippings);
            }
        });
    }
    /**
     * --------------------
     * Relationships
     * --------------------
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function items(): HasMany
    {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }

    public function shipments(): HasMany
    {
        return $this->hasMany(OrderShipping::class, 'order_id');
    }

    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'address_id');
    }

    /*
    * --------------------
    * Helpers
    * --------------------
    */
    public static function getShippingTypes(): array
    {
        return [self::ONCE, self::DAILY, self::WEEKLY, self::MONTHLY];
    }

    public static function getPaymentTypes(): array
    {
        return [self::CASH, self::CARD];
    }

    public static function getPaymentStatus(): array
    {
        return [self::PAID, self::UNPAID];
    }

    public static function getOrderStatus(): array
    {
        return [
            self::PENDING,
            self::ACCEPTED,
            self::REJECTED,
            self::DELIVERED,
            self::FINISHED,
        ];
    }

    public static function getWeekDays(): array
    {
        return ['sat', 'sun', 'mon', 'tue', 'wed', 'thu', 'fri'];
    }

    /**
     * isShippingOnce
     *
     * @return bool
     */
    public function isShippingOnce(): bool
    {
        return $this->shipping_type == self::ONCE || $this->shipping_count == 1;
    }
    
    /**
     * isShippingWeekly
     *
     * @return bool
     */
    public function isShippingWeekly(): bool
    {
        return $this->shipping_type == self::WEEKLY;
    }

    /**
     * updateItemsQuantities
     *
     * @return void
     */
    public function updateItemsQuantities()
    {
        if ($this->isShippingOnce())
            $this->updateProductsQuantity();
        else
            $this->updateProductsReservedQuantity();
    }

    /**
     * updateProductsQuantity
     *
     * @return void
     */
    public function updateProductsQuantity()
    {
        foreach ($this->items as $item) {
            $item->product->decrement('quantity', $item->quantity);
        }
    }

    /**
     * updateProductsReservedQuantity
     *
     * @return void
     */
    public function updateProductsReservedQuantity()
    {
        foreach ($this->items as $item) {
            $item->product->increment('quantity_reserved', ($this->shipping_count * $item->quantity));
        }
    }

    /**
     * scheduleShippingsOfRepeatedOrder
     * @return ?OrderShipping[]
     */
    public function scheduleShippingsOfRepeatedOrder()
    {
        $orderShippings = [];

        // No schedule for non-repeated orders
        if ($this->isShippingOnce())
            return null;

        // Map carbon functions
        $shippingCarbonFunction = [
            self::DAILY => 'addDay',
            self::WEEKLY => 'addWeek',
            self::MONTHLY => 'addMonth',
        ];

        $initialDate = Carbon::make($this->start_date);

        // Then loop through shipping_count
        for ($i = 0; $i < $this->shipping_count; $i++) {
            $initialDate = $initialDate->{$shippingCarbonFunction[$this->shipping_type]}();
            $orderShippings[] = new OrderShipping([
                'user_id' => $this->user_id,
                'date' => $initialDate->toDateString(),
            ]);
        }

        return $orderShippings;
    }
}
