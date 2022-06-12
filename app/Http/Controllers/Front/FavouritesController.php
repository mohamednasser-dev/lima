<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouritesController extends Controller
{
    public function Favourite_List()
    {
        $data['title'] = trans('lang.favourite');
        $data['favourites'] = Post::whereHas('Favorites', function ($q) {
            $q->where('user_id', Auth::guard('users')->user()->id);
        })->get();

        return view('frontend.favourite', $data);
    }


}
