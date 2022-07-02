<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Favorite;
use App\Models\Page;
use App\Models\Post;
use App\Models\Slider;

class HomeController extends Controller
{
    public function home()
    {
        $data['categories'] = Category::whereIn('parent_id',[1,2])->get();
//        to get random free posts
//        $data['free_posts'] = Post::free()->get()->take(3);
//        to get spicefic posts
        $data['free_posts'] = Post::free()->whereIn('category_id',[7,3])->get()->take(3);
        return view('landing.home',compact('data'));
    }

    public function pages($type)
    {
        $data = Page::where('type',$type)->first();
        return view('landing.pages',compact('data','type'));
    }



}
