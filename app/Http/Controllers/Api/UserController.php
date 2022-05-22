<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\GeneralController;
use App\Http\Resources\UserResources;
use App\Models\SubscribeType;
use App\Models\SubscriptionHistory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\VerfiyCode;
use App\Mail\CodeMail;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use function auth;
use function msgdata;
use function response;

class UserController extends GeneralController
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function register(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => 'required|string|min:2|max:255',
            'phone' => 'required|string|unique:users,phone|max:20',
            'city_id' => 'required|exists:cities,id',
            'password' => 'required|string|min:8|max:100',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first()]);
        }
        //generate random 4 numbers
        $otp = \Otp::generate($data['phone']);
        //send here sms
        //...
        //end sending
        $result['otp'] = $otp;
        return $this->sendResponse($result, __('lang.verify_phone'), 200);
    }

    public function verify_phone(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => 'required|string|min:2|max:255',
            'phone' => 'required|string|unique:users,phone|max:20',
            'city_id' => 'required|exists:cities,id',
            'password' => 'required|string|min:8|max:100',
            'otp' => 'required|numeric|min:4',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first()]);
        }
//        $validated_otp = \Otp::validate($data['phone'], $data['otp']);
//        if ($validated_otp->status == true) {
        unset($data['otp']);
        $created_user = User::create($data);
        if ($created_user) {
            $credentials = $request->only(['phone', 'password']);
            $token = Auth::guard('api')->attempt($credentials);
            if (!$token) {
                return $this->errorResponse(__('lang.login_data_not_correct'), null, 401);
            } else {
                $logined_user = Auth::guard('api')->user();
                $logined_user->token_api = $token;
                return $this->sendResponse($logined_user, __('lang.login_s'), 200);
            }
        }
//        } else {
//            return $this->errorResponse(__('lang.otp_invalid'), null, 401);
//        }
    }


    public function profile(Request $request)
    {
        $id = apiUser()->id;
        $user = User::where('id', $id)->first();
        $data = (new UserResources($user));
        return $this->sendResponse($data, __('lang.data_show_successfully'), 200);
    }

    public function update_profile(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => 'required|string|min:2|max:255',
            'phone' => 'required|string|max:20|unique:users,phone,' . auth('api')->user()->id,
            'city_id' => 'required|exists:cities,id',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first()]);
        }
        $id = auth('api')->user()->id;
        User::findOrFail($id)->update($data);
        $user = User::findOrFail($id);
        $user = (new UserResources($user));
        return $this->sendResponse($user, __('lang.user_profile_updated_successfully'), 200);
    }

    public function update_password(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'old_password' => 'required|string',
            'password' => 'required|string|confirmed|min:8',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first()]);
        }
        $user = User::findOrFail(auth('api')->user()->id);
        if (\Hash::check($request->old_password, $user->password)) {
            $user->password = $request->password;
            $user->save();
            unset($user['status']);
            return $this->sendResponse($user, __('lang.user_password_updated_successfully'), 200);
        } else {
            return response()->json(msg($request, failed(), trans('lang.current_pass_incorrect')));
        }

    }

    public function forget_password_code(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'email' => 'required|email|max:100|exists:users,email',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first()]);
        }
        $code = rand(100000, 999999);
        VerfiyCode::create([
            'code' => $code,
            'email' => $request['email']
        ]);
        $details = [
            'title' => 'MyKom',
            'body' => 'thank you for register , your code is : ' . $code,
        ];
        $newpassword = bcrypt($code);
        User::where('email', $data['email'])->update([
            'password' => $newpassword
        ]);
        Mail::to($request['email'])->send(new CodeMail($details));
        return $this->sendResponse($request['email'], __('lang.code_sent_to_email_successfully'), 200);
    }

    public function login(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'phone' => 'required|exists:users,phone',
            'password' => 'required|min:8'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first()]);
        }
        $credentials = $request->only(['phone', 'password']);
        $token = Auth::guard('api')->attempt($credentials);
        if (!$token) {
            return $this->errorResponse(__('lang.login_data_not_correct'), null, 401);
        } else {
            $user = Auth::guard('api')->user();
            if (!$token) {
                return $this->errorResponse(__('lang.login_data_not_correct'), null, 401);
            } else {
                if ($user->status == 'inactive') {
                    Auth::guard('api')->logout();
                    return $this->errorResponse(__('lang.you_are_not_active'), null, 406);
                } else {
                    $user->token_api = $token;
                    unset($user['status']);
                    return $this->sendResponse($user, trans('lang.login_s'), 200);
                }
            }
        }
    }

    public function store_subscription(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'subscribe_type_id' => 'required|exists:subscribe_types,id',
            'type' => 'required|in:visa,cash'
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
        $ended_date = $today->addMonths($subscription->month_count);
        $data['ended_at'] = $ended_date;
        $data['payment_status'] = 1 ;
        SubscriptionHistory::create($data);

        //update user table
        $user_data['subscriber'] = 1;
        $user_data['subscription_ended_at'] = $ended_date;
        User::find(apiUser()->id)->update($user_data);

        return $this->sendResponse((object)[], trans('lang.subscription_s'), 200);
    }


    public function logout()
    {
        auth('api')->logout();
        return $this->sendResponse((object)[], __('lang.logout_s'), 200);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

}
