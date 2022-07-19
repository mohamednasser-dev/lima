<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\SubscribeTypeResources;
use App\Http\Controllers\GeneralController;
use App\Models\Coupon;
use App\Models\CouponUsage;
use App\Models\Invoices;
use App\Models\Setting;
use Illuminate\Support\Facades\Validator;
use App\Models\SubscriptionHistory;
use App\Models\SubscribeType;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class SubscriptionController extends GeneralController
{
    public function __construct(SubscribeType $model)
    {
        parent::__construct($model);
    }

    public function subscription_types(Request $request)
    {
        $data = SubscribeType::get();
        $data = (SubscribeTypeResources::collection($data));
        return $this->sendResponse($data, __('lang.data_show_successfully'), 200);
    }

    public function store_subscription(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'subscribe_type_id' => 'required|exists:subscribe_types,id',
            'type' => 'required|in:cash'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first()]);
        }
        $subscription = SubscribeType::findOrFail($request->subscribe_type_id);
        $data['name_ar'] = $subscription->name_ar;
        $data['name_en'] = $subscription->name_en;
        $data['cost'] = $subscription->cost;
        $data['user_name'] = apiUser()->name;
        $data['phone'] = apiUser()->phone;
        $data['user_id'] = apiUser()->id;
        $today = Carbon::now();
        $data['started_at'] = $today;
        $ended_date = Carbon::now()->addMonths($subscription->month_count);
        $data['ended_at'] = $ended_date;
        $data['payment_status'] = 1;
        $created = SubscriptionHistory::create($data);

        return $this->sendResponse($created, trans('lang.subscription_s'), 200);
    }

    public function payment_step_one(Request $request)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://app.fawaterk.com/api/v2/getPaymentmethods',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer a006c8d4431af8aeeb67bc1760304a0cb744faea6fcb750b05'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $data = SubscribeType::get();
        $final_result['subscription_types'] = (SubscribeTypeResources::collection($data));
        $final_result['payment_methods'] = json_decode($response);
        return msgdata($request, success(), trans('lang.shown_s'), $final_result);
    }

    public function payment_step_two(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'payment_method_id' => 'required',
            'subscribe_type_id' => 'required|exists:subscribe_types,id',
            'code' => 'nullable|exists:coupons,code',
            'phone' => 'nullable|numeric',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first()]);
        }
        if($request->phone){
            $phone = $request->phone ;
        }else{
            $phone = apiUser()->phone ;
        }
        $subscription = SubscribeType::where('id', $request->subscribe_type_id)->first();
        if ($subscription) {
            //Generate price
            if ($request->code) {
                $price = $this->check_coupon($request, $subscription->cost, apiUser());
            } else {
                $price = $subscription->cost;
            }
            $price = (string)$price;
            $Currency = "EGP";
            //end
        } else {
            return msgdata($request, failed(), trans('lang.should_choose_valid_course'), (object)[]);
        }
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://app.fawaterk.com/api/v2/invoiceInitPay',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                        "payment_method_id": ' . $request->payment_method_id . ',
                        "cartTotal": ' . $price . ',
                        "currency": "' . $Currency . '",
                        "customer": {
                            "first_name": "' . apiUser()->name . '",
                            "last_name": "' . apiUser()->id . '",
                            "email": "' . apiUser()->id . 'mohamed_hisham@80fekra.com",
                            "phone": "' . $phone . '",
                            "address": "address"
                        },
                        "cartItems": [
                            {
                                "name": "' . $subscription->name_ar . '",
                                "price": ' . $price . ',
                                "quantity": "1"
                            }

                        ]
                    }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer a006c8d4431af8aeeb67bc1760304a0cb744faea6fcb750b05'
            ),
        ));
        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response);
        //store invoice data to database with course id and user_id ...
        $result_data['invoice_id'] = $response->data->invoice_id;
        $result_data['invoice_key'] = $response->data->invoice_key;
        $result_data['user_id'] = apiUser()->id;
        $result_data['subscription_id'] = $subscription->id;
        $result_data['payment_id'] = $request->payment_method_id;
        $result_data['code'] = $request->code;
        Invoices::create($result_data);
        //end store invoice .....
        return msgdata($request, success(), trans('lang.shown_s'), $response);

    }

    public function check_coupon(Request $request, $cost, $user)
    {
        $today = Carbon::now();
        $exists_coupon = Coupon::where('code', $request->code)->where('from_date', '<=', $today)->where('to_date', '>=', $today)->first();
        if ($exists_coupon) {
            //calculate discount
            $price = $cost;
            $discount = $price * $exists_coupon->amount / 100;
            $final_price = $price - $discount;
            $exists_product_in_cart_coupon = Coupon::where('code', $request->code)
                ->where('from_date', '<=', $today)
                ->where('to_date', '>=', $today)
                ->first();
            if ($exists_product_in_cart_coupon) {
                //check if customer used this coupon before or not
                $exists_coupon_usage = CouponUsage::where('user_id', $user->id)->where('coupon_id', $exists_coupon->id)->first();
                if ($exists_coupon_usage) {
                    return $this->errorResponse('تم استخدام الكوبون من قبل - يرجى حذفه او تجربة كوبون اخر', null, 401);
                }
                return $final_price;
            } else {
                return $this->errorResponse('لا يوجد في السلة المنتج المحدد للخصم ', null, 401);
            }
        } else {
            return $this->errorResponse('تم انتهاء الكوبون', null, 401);
        }
    }

    public function excute_pay(Request $request)
    {
        //update user table if visa because in cash admin should accept order first
        $invoice = Invoices::where('invoice_id', $request->invoice_id)->first();
        if ($invoice) {
            $invoice->status = 1;
            $invoice->save();
            $invoice = Invoices::where('invoice_id', $request->invoice_id)->first();
            $user = User::where('id', $invoice->user_id)->first();
            if ($user) {
                $subscription = SubscribeType::find($invoice->subscription_id);
                $month_count = $subscription->month_count;
                $today = Carbon::now();
                $ended_date = Carbon::now()->addMonths($month_count);
                $user->subscriber = 1;
                $user->subscription_ended_at = $ended_date;
                $user->save();

                //calculate cost if exists coupon
                $final_price = 0;
                if ($invoice->code) {
                    $exists_coupon = Coupon::where('code', $invoice->code)->first();
                    $price = $subscription->cost;
                    $discount = $price * $exists_coupon->amount/100 ;
                    $final_price = $price - $discount ;
                }else{
                    $final_price = $subscription->cost ;
                }
                //end calculation
                $history_data['subscribe_type_id'] = $invoice->subscription_id;
                $history_data['name_ar'] = $subscription->name_ar;
                $history_data['name_en'] = $subscription->name_en;
                $history_data['cost'] = $final_price;
                $history_data['user_name'] = $user->name;
                $history_data['phone'] = $user->phone;
                $history_data['user_id'] = $invoice->user_id;
                $history_data['started_at'] = $today;
                $history_data['ended_at'] = $ended_date;
                $history_data['payment_status'] = 1;
                $history_data['type'] = 'visa';
                $history_data['status'] = 'accepted';
                SubscriptionHistory::create($history_data);

                //if coupon exists
                if ($invoice->code) {
                    $coupon = Coupon::where('code', $invoice->code)->first();
                    $exists_coupon_usage = CouponUsage::where('user_id', $user->id)->where('coupon_id', $coupon->id)->first();
                    if (!$exists_coupon_usage) {
                        $coupon_data['user_id'] = $user->id;
                        $coupon_data['coupon_id'] = $coupon->id;
                        CouponUsage::create($coupon_data);
                        $coupon->usage_count = $coupon->usage_count + 1 ;
                        $coupon->save();
                    }
                }
                return "pay done success";
            } else {
                return "no user selected";
            }
        } else {
            return "no invoice selected";
        }
    }

    public function pay_sucess()
    {
        return redirect()->route('success');
    }

    public function pay_error()
    {
        return redirect()->route('error');
    }


}
