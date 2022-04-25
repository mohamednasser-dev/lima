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

        $data['main_categories'] = Category::where('id', $id)->with('childrenCategories')->with('Posts',function ($q){
            $q->where('status',1);
        })->first();

        if (!$data['main_categories']) {
            abort(404);
        }
        $data['title'] = $data['main_categories']->name;

        if ($data['main_categories']->childrenCategories->count() == 0) {
//            to posts and articles
            return view('frontend.category_details', compact('data'));
        }

//        to sub category
        return view('frontend.category', compact('data'));

     }
}
