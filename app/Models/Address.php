<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function getFullAddressAttribute(): string
    {
        $address  = __('lang.address_construct.apartment_no', ['no' => $this->apartment]);
        $address .= ', '.__('lang.address_construct.building_no', ['no' => $this->building]);
        $address .= ', '.__('lang.address_construct.region', ['no' => $this->region]);
        return $address;
    }
}
