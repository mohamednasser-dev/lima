<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\CouponApiRequest;
use App\Http\Controllers\GeneralController;
use App\Models\SubscribeType;
use Illuminate\Support\Facades\DB;
use App\Models\CouponUsage;
use App\Models\Coupon;
use Carbon\Carbon;

class CouponController extends GeneralController
{
    public function __construct(Coupon $model)
    {
        parent::__construct($model);
    }

    public function apply_coupon(CouponApiRequest $request)
    {
        $user = apiUser();

        // Validate request
        $data = $request->validated();
        //get coupon data if exists
        $today = Carbon::now();
        $exists_coupon = Coupon::where('code', $request->code)->where('from_date', '<=', $today)->where('to_date', '>=', $today)->first();
        if ($exists_coupon) {
            $subscription = SubscribeType::where('id', $request->subscribe_type_id)->first();
            //calculate discount
            $price = $subscription->cost;
            $discount = $price * $exists_coupon->amount/100 ;
            $final_price = $price - $discount ;
            $exists_product_in_cart_coupon = Coupon::where('code', $request->code)
                ->where('from_date', '<=', $today)
                ->where('to_date', '>=', $today)
                ->first();
            if ($exists_product_in_cart_coupon) {
                //check if customer used this coupon before or not
                $exists_coupon_usage = CouponUsage::where('user_id',$user->id)->where('coupon_id', $exists_coupon->id)->first();
                if($exists_coupon_usage){
                    return $this->errorResponse('تم استخدام الكوبون من قبل - يرجى حذفه او تجربة كوبون اخر', null, 401);
                }
                $result['totalOrder'] = $subscription->cost;
                $result['discount_percentage'] = $exists_coupon->amount;
                $result['discount'] = $discount;
                $result['finalTotal'] = $final_price;
                return $this->sendResponse($result, 'تم التحقق من كوبون الخصم', 200);
            } else {
                return $this->errorResponse('لا يوجد في السلة المنتج المحدد للخصم ', null, 401);
            }
        } else {
            return $this->errorResponse('تم انتهاء الكوبون', null, 401);
        }

    }

}
