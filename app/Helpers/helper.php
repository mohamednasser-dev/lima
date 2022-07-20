<?php

use App\Models\Setting;
use App\Models\SmsSetting;

if (!function_exists('settings')) {
    function settings($key)
    {
        $setting = Setting::where('key', $key)->first();

        if (!$setting)
            return "";

        return $setting->val;
    }
}

if (!function_exists('msgdata')) {

    function msgdata($request, $status, $key, $data)
    {
        $msg['status'] = $status;
        $msg['msg'] = $key;
        $msg['data'] = $data;
        return $msg;
    }
}

if (!function_exists('new_inbox')) {
    function new_inbox()
    {
        return \App\Models\Inbox::where('seen_at', null)->get()->count();
    }
}

if (!function_exists('msg')) {
    function msg($request, $status, $key)
    {
        $msg['status'] = $status;
        $msg['msg'] = $key;
        return $msg;
    }
}

if (!function_exists('sendResponse')) {
    function sendResponse($status = null, $msg = null, $data = null)
    {
        return response()->json(
            [
                'status' => $status,
                'msg' => $msg,
                'data' => $data
            ]
        );
    }
}

if (!function_exists('validationErrorsToString')) {
    function validationErrorsToString($errArray)
    {
        $valArr = array();
        foreach ($errArray->toArray() as $key => $value) {
            $errStr = $value[0];
            array_push($valArr, $errStr);
        }
        return $valArr;
    }
}

if (!function_exists('success')) {
    function success()
    {
        return 200;
    }
}

if (!function_exists('failed')) {
    function failed()
    {
        return 401;
    }
}

if (!function_exists('not_authoize')) {
    function not_authoize()
    {
        return 403;
    }
}

if (!function_exists('not_acceptable')) {
    function not_acceptable()
    {
        return 406;
    }
}

if (!function_exists('not_found')) {
    function not_found()
    {
        return 404;
    }
}

if (!function_exists('not_active')) {
    function not_active()
    {
        return 405;
    }
}


if (!function_exists('apiUser')) {
    function apiUser()
    {
        return auth('api')->user();
    }
}

if (!function_exists('new_subscription')) {
    function new_subscription()
    {
        return \App\Models\SubscriptionHistory::where('type', 'cash')->where('status', 'pending')->get()->count();
    }
}

//sms
if (!function_exists('sendSMS')) {
    function sendSMS($phone = null, $message = null)
    {
//
//        $data1 = [
//            'Username' => env('SMSMISR_USERNAME'),
//            'password' => env('SMSMISR_PASSWORD'),
//            'language' => '3',
//            'sender' => env('SMSMISR_SENDER'),
//            'Mobile' => $phone,
//            'message' => $message,
//        ];

        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://smsmisr.com/api/webapi?username=" . env('SMSMISR_USERNAME') . "&password=" .env('SMSMISR_PASSWORD'). "&language=3&sender=" . env('SMSMISR_SENDER')  . "&mobile=" . $phone  . "&message=" . $message,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                // Set here requred headers
                "accept: */*",
                "accept-language: en-US,en;q=0.8",
                "content-type: application/json",
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        return $response ;
    }
}

//firebase notification
if (!function_exists('send')) {

    function send($tokens, $title = "رسالة جديدة", $msg = "رسالة جديدة فى البريد", $type = 'subscription')
    {
        $key = "AAAAjFS77Fo:APA91bHlNreCeMU6OlpMGkQQkFG169Jc9hBO2sHknTum0LALiBoD4PXJVd_gXZB_CudJAhEvLYrs49ZL-fakf7pJWE6GpCSr75T7tZXkvw91_EXQPz7wj1wBOMEw7ZpiyH-LAfTuWuHL";
        $fields = array
        (
            "registration_ids" => (array)$tokens,  //array of user token whom notification sent to
            "priority" => 10,
            'data' => [
                'title' => $title,
                'body' => strip_tags($msg),
                'type' => $type,
                'icon' => 'myIcon',
                'sound' => 'mySound',
            ],
            'notification' => [
                'title' => $title,
                'body' => strip_tags($msg),
                'type' => $type,
                'icon' => 'myIcon',
                'sound' => 'mySound',
            ],
            'vibrate' => 1,
            'sound' => 1
        );

        $headers = array
        (
            'accept: application/json',
            'Content-Type: application/json',
            'Authorization: key=' . $key
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);


        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }

        curl_close($ch);
        return $result;
    }
}
