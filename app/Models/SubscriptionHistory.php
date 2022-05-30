<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionHistory extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = [ 'name' , 'type_name', 'status_text' ];

    public function getNameAttribute()
    {
        if (\app()->getLocale() == "ar") {
            return $this->name_ar;
        } else {
            return $this->name_en;
        }
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function SubscribeType()
    {
        return $this->belongsTo(SubscribeType::class, 'subscribe_type_id');
    }


    public function getTypeNameAttribute()
    {
        if ($this->type == 'visa') {
            return trans('lang.visa');
        } elseif ($this->type == 'cash') {
            return trans('lang.cash');
        } elseif ($this->type == 'manual') {
            return trans('lang.manual');
        }
    }

    public function getStatusTextAttribute()
    {
        if ($this->status == 'accepted') {
            return trans('lang.accepted');
        } elseif ($this->status == 'rejected') {
            return trans('lang.rejected');
        } elseif ($this->status == 'finished') {
            return trans('lang.finished');
        } elseif ($this->status == 'pending') {
            return trans('lang.pending');
        }
    }

}
