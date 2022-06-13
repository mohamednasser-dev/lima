<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Favorite;
use App\Models\Post;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function Home()
    {

        $data['title'] = trans('lang.Home');
        $data['main_categories'] = Category::root()->with('childrenCategories')->get();

        $data['sliders'] = Slider::all();
        return view('frontend.home', compact('data'));
    }

    public function make_favorite($id)
    {
        $user_id = auth()->guard('users')->user()->id;
        try {
            $data['post_id'] = $id;
            $data['user_id'] = $user_id;
            Favorite::create($data);
            Alert::success(trans('lang.done'), trans('lang.post_favorite_added'));

        } catch (\Exception $ex) {
            Favorite::where('user_id', $user_id)->where('post_id', $id)->delete();
            Alert::success(trans('lang.done'), trans('lang.post_favorite_removed'));
        }
        return redirect()->back();
    }

    public function CategoryDetails($id)
    {

        $data['main_categories'] = Category::where('id', $id)->with('childrenCategories')->with('Posts', function ($q) {
            $q->where('status', 1);
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


    public function PostDetails($id)
    {
        $data['post'] = Post::findOrFail($id);
        $data['title'] = $data['post']->name;
        if ($data['post']->free == 0) {

            return view('frontend.post_details', compact('data'));

        } elseif (Auth::guard('users')->check()) {
            if (Auth::guard('users')->user()->subscriber == 1) {
                return view('frontend.post_details', compact('data'));
            } else {
                return redirect(url('subscribe'));
            }

        } else {
            return redirect(url('user-login'));
        }


    }
}
