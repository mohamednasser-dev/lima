<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){

        $data['title'] = trans('lang.Home');
        $data['main_categories'] = Category::whereNull('parent_id')->get();
        return view('frontend.home',compact('data'));
    }
}
