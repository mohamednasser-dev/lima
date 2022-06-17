<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Resources\SubscribeTypeResources;
use App\Models\Category;
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

}
