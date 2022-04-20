<?php
use App\Models\Setting;

if (!function_exists('settings')) {
    function settings($key)
    {
        $setting = Setting::where('key',$key)->first();
        
        if(!$setting)
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


if(!function_exists('apiUser')){
    function apiUser(){
        return auth('api')->user();
    }
}
