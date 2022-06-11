<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\GeneralController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class HomeController extends GeneralController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['post_videos'] = Post::where('type','video')->get()->count();
        $data['post_articles'] = Post::where('type','article')->get()->count();
        $data['categories'] = Category::where('parent_id','!=',null)->get()->count();
        $data['customers'] = User::where('subscriber',0)->get()->count();
        $data['customers_subscription'] = User::where('subscriber',1)->get()->count();
        $newest_customers  = User::orderBy('created_at', 'desc')->take(5)->get();
        return view('home',compact('data','newest_customers'));
    }
}
