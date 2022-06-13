<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
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

}
