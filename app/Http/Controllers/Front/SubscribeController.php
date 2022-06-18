<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Resources\SubscribeTypeResources;
use App\Models\Category;
use App\Models\Invoices;
use App\Models\Post;
use App\Models\Slider;
use App\Models\SubscribeType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class SubscribeController extends Controller
{
    public function subscribe()
    {
        $data['title'] = trans('lang.Subscribe');
        $data['subscribe_types'] =SubscribeType::all();
        return view('frontend.subscribe', $data);
    }

    public function subscribe_payments($id)
    {
        $data['title'] = trans('lang.choose_payment_method');
        $data['subscribe_type_id']  = $id;
        $data['subscription_types']  = SubscribeType::get();
        $data['payment_methods'] = $this->payment_methods();
        return view('frontend.subscribe_payments', $data);
    }

    public function payment_methods(){
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
        return json_decode($response);
    }
    public function payment_step_two(Request $request )
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'payment_method_id' => 'required',
            'subscribe_type_id' => 'required|exists:subscribe_types,id'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first()]);
        }
        $subscription = SubscribeType::where('id', $request->subscribe_type_id)->first();
        if ($subscription) {
            //Generate price
            $price = (string)$subscription->cost;
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
                            "email": "mohamed_hisham@80fekra.com",
                            "phone": "' . apiUser()->phone . '",
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
        Invoices::create($result_data);
        //end store invoice .....
        dd($response);

    }


    public function make_subscription(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'payment_method_id' => 'required',
            'subscribe_type_id' => 'required|exists:subscribe_types,id'
        ]);
        if ($validator->fails()) {
            Alert::warning(trans('lang.warning'), $validator->messages()->first());
            return redirect()->back();
        }

        $subscription = SubscribeType::where('id', $request->subscribe_type_id)->first();
        if ($subscription) {
            //Generate price
            $price = (string)$subscription->cost;
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
                            "first_name": "' . auth()->guard('users')->user()->name . '",
                            "last_name": "' . auth()->guard('users')->user()->id . '",
                            "email": "mohamed_hisham@80fekra.com",
                            "phone": "' . auth()->guard('users')->user()->phone . '",
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
        $result_data['user_id'] = auth()->guard('users')->user()->id;
        $result_data['subscription_id'] = $subscription->id;
        $result_data['payment_id'] = $request->payment_method_id;
        Invoices::create($result_data);
        //end store invoice .....
        $payment_method_id = $request->payment_method_id;
        if($request->payment_method_id == 2){
            //visa and mastercard payment
            return redirect($response->data->payment_data->redirectTo);
        }elseif($request->payment_method_id == 3){
            //Fawry payment
            //return to view to display aman code
            $aman_code = $response->data->payment_data->fawryCode ;
            $expire_date = $response->data->payment_data->expireDate ;
            $title = 'Fawry page';
            return view('frontend.payment.aman_page',compact('payment_method_id','aman_code','title','expire_date'));
        } elseif($request->payment_method_id == 4){
            //wallet payment
            //return to view to display aman code
            $aman_code = $response->data->payment_data->meezaReference ;
            $expire_date = $response->data->payment_data->meezaQrCode ;
            $title = 'Pay With wallet page';
            return view('frontend.payment.aman_page',compact('payment_method_id','aman_code','title','expire_date'));
        } elseif($request->payment_method_id == 12){
            //aman payment
            //return to view to display aman code
            $aman_code = $response->data->payment_data->amanCode ;
            $expire_date = "" ;

            $title = 'aman page';
            return view('frontend.payment.aman_page',compact('payment_method_id','aman_code','title','expire_date'));
        }
dd($request->payment_method_id ,$response);

    }

}
