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
        return view('landing.home');
    }


}
