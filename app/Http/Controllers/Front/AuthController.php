<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
