<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){

        $data['title'] = trans('lang.Home');
        return view('frontend.home',compact('data'));
    }
}
