<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\GeneralController;

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
        $data['post_videos'] = Category::where('parent_id',null)->get()->count();
        $data['customers'] = User::get()->count();
        $newest_customers  = User::orderBy('created_at', 'desc')->take(5)->get();
        return view('home',compact('data','newest_customers'));
    }
}
