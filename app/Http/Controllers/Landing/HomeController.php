<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Favorite;
use App\Models\Post;
use App\Models\Slider;

class HomeController extends Controller
{
    public function home()
    {
        $data['categories'] = Category::whereIn('parent_id',[1,2])->get();
        $data['free_posts'] = Post::free()->get()->take(3);
        return view('landing.home',compact('data'));
    }


}
