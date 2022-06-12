<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function page($id)
    {
        $data['page'] = Page::findOrFail($id);
        $data['title'] =  $data['page']->type_text;

        return view('frontend.page', $data);
    }


}
