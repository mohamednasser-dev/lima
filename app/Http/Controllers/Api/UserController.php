<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\GeneralController;
use App\Http\Requests\Api\ForgerPasswordRequest;
use App\Http\Requests\Api\LoginRequest;
use App\Http\Requests\Api\RegisterRequest;
use App\Http\Requests\Api\UpdateProfileRequest;
use App\Mail\CodeMail;
use App\Http\Resources\UserResources;
use App\Models\User;
use App\Models\VerfiyCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $created_user = User::create($data);
        if($created_user){
            $credentials = $request->only(['email', 'password']);
            $token = Auth::guard('api')->attempt($credentials);
            if (!$token) {
                return $this->errorResponse(__('lang.login_data_not_correct'), null, 401);
            } else {
                $logined_user = Auth::guard('api')->user();
                $logined_user->token_api = $token;
                unset($logined_user['status']);
                return $this->sendResponse($logined_user, __('lang.user_successfully_registered'), 200);
            }
        }
    }

    public function profile(Request $request)
    {
        $id = auth('api')->user()->id;
        $user = User::where('id', $id)->first();
        $data = (new UserResources($user));
        return $this->sendResponse($data, __('lang.data_show_successfully'), 200);
    }

    public function update_profile(UpdateProfileRequest $request)
    {
        $data = $request->validated();
        $id = auth('api')->user()->id;
        User::findOrFail($id)->update($data);
        $user = User::findOrFail($id);
        unset($user['status']);
        return $this->sendResponse($user, __('lang.user_profile_updated_successfully'), 200);
    }

    public function forget_password_code(ForgerPasswordRequest $request)
    {
        $data = $request->validated();
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

    public function login(LoginRequest $request)
    {
        $data = $request->validated();
        $credentials = $request->only(['email', 'password']);
        $token = Auth::guard('api')->attempt($credentials);
        if (!$token) {
            return $this->errorResponse(__('lang.login_data_not_correct'), null, 401);
        } else {
            $user = Auth::guard('api')->user();
            if (!$token) {
                return $this->errorResponse(__('lang.login_data_not_correct'), null, 401);
            } else {
                if ($user->status == 'unactive') {
                    Auth::guard('api')->logout();
                    return $this->errorResponse(__('lang.you_are_not_active'), null, 406);
                } else {
                    $user->token_api = $token;
                    unset($user['status']);
                    return $this->sendResponse($user, __('lang.login_s'), 200);
                }
            }
        }
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
