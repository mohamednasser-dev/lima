<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function Login()
    {
        $data['title'] = trans('lang.Login');
        return view('frontend.login', compact('data'));
    }

    public function DoLogin(Request $request)
    {

        $data = $this->validate(request(), [
            'phone' => 'required',
            'password' => 'required',

        ]);

        if (Auth::guard('users')->attempt($data)) {

            return redirect(url('/'));
        }


        return redirect()->back()->with("danger", trans('lang.phoneOrPasswordError'));

    }

    public function Profile()
    {
        $data['title'] = trans('lang.profile');
        $data['user'] = Auth::guard('users')->user();
        return view('frontend.profile', $data);
    }

    public function Update_Profile(Request $request)
    {
        $data = $this->validate(request(), [
            'phone' => 'required|string|max:20|unique:users,phone,' . Auth::guard('users')->user()->id,
            'name' => 'required|string',
            'city_id' => 'required|exists:cities,id',
            'password' => 'nullable|confirmed',

        ]);

        $user = Auth::guard('users')->user();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->city_id = $request->city_id;
        if ($request->password) {
            $user->password = $request->password;
        }

        $user->save();

        return redirect(url('user-profile'))->with('success', trans('lang.updatedSucssefully'));

    }

    public function logout()
    {

        if (Auth::guard('users')->check()) {
            Auth::guard('users')->logout();
        }

        return redirect('/');

    }

    public function RenderRegister()
    {
        $data['title'] = trans('lang.register');

        return view('frontend.register', compact('data'));

    }

    public function Register(Request $request)
    {
        $data = $this->validate(request(), [
            'name' => 'required|string|min:2|max:255',
            'phone' => 'required|string|unique:users,phone|max:20',
            'city_id' => 'required|exists:cities,id',
            'password' => 'required|string|confirmed|min:8|max:100',

        ]);

        //generate random 4 numbers
        $otp = \Otp::generate($data['phone']);
        //send here sms
        //...
        //end sending
        $data['otp'] = $otp;
        $data['title'] = trans('lang.check_dode');


        return view('frontend.check_code', compact('data'));

    }


    public function verify_phone(Request $request)
    {


        $data = $this->validate(request(), [
            'name' => 'required|string|min:2|max:255',
            'phone' => 'required|string|unique:users,phone|max:20',
            'city_id' => 'required|exists:cities,id',
            'password' => 'required|string|min:8|max:100',
            'otp' => 'required|numeric|min:4',
        ]);

//        $validated_otp = \Otp::validate($data['phone'], $data['otp']);
//        if ($validated_otp->status == true) {
        unset($data['otp']);
        unset($data['login']);
        $created_user = User::create($data);
        if ($created_user) {
            $credentials = $request->only(['phone', 'password']);
            $token = Auth::guard('users')->attempt($credentials);

            if ($token) {

                $user = Auth::guard('users')->user();
                return redirect(url('/'));
            } else {
                return view('frontend.check_code', compact('data'));

            }

        }
//        } else {
//        return view('frontend.check_code', compact('data'));
//        }
    }

}
