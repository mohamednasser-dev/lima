<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {

        $data['title'] = trans('lang.Home');
        $data['main_categories'] = Category::root()->with('childrenCategories')->get();

        $data['sliders'] = Slider::all();
        return view('frontend.home', compact('data'));
    }

    public function CategoryDetails($id)
    {

        $data['main_categories'] = Category::where('id',$id)->with('childrenCategories')->first();
        if (!$data['main_categories']){
            abort(404);
        }
        $data['title'] = trans('lang.Home');

        $data['sliders'] = Slider::all();
        return view('frontend.home', compact('data'));
    }
}
