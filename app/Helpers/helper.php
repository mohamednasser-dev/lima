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
    function sendSMS($Phone = null, $Message = null)
    {

        $data1 = [
            'Username' => env('SMSMISR_USERNAME'),
            'password' => env('SMSMISR_PASSWORD'),
            'language' => '3',
            'sender' => env('SMSMISR_SENDER'),
            'Mobile' => $Phone,
            'message' => $Message,
        ];
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://smsmisr.com/api/v2/username=XXX&password=XXX&language=X&sender=XXX&mobile=XXX&message=XXX&DelayUntil=XXX",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => json_encode($data1),
            CURLOPT_HTTPHEADER => array(
                // Set here requred headers
                "accept: */*",
                "accept-language: en-US,en;q=0.8",
                "content-type: application/json",
            ),
        ));

        $ch = curl_init();
        $url = "https://smsmisr.com/api/v2/username=XXX&password=XXX&language=X&sender=XXX&mobile=XXX&message=XXX&DelayUntil=XXX";
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "AppSid=su7G9tOZc6U0kPVnoeiJGHUDMKe8tp&Body=".$message."&SenderID=EmarSrh&Recipient=".$mobile_num."&encoding=UTF8&responseType=json"); // define what you want to post
        //  curl_setopt($ch, CURLOPT_POSTFIELDS, "userid=fetoh@koof-ksa.com&password=fetoh000000&msg=".$Message."&sender=ALKHALIL-GR&to=".$user->phone."&encoding=UTF8"); // define what you want to post
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec ($ch);
        curl_close ($ch);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $response;
    }
}
