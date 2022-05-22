<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\GeneralController;
use App\Http\Resources\CategoryResources;
use App\Http\Resources\PostResources;
use App\Http\Resources\SubCategoryResources;
use App\Models\Category;
use App\Models\Post;
use App\Models\Slider;

class HomeController extends GeneralController
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }
    public function home($id)
    {
        $cats = $this->model::where('parent_id',$id)->get();
        $data = (CategoryResources::collection($cats));
        return $this->sendResponse($data,__('lang.data_show_successfully'),200);
    }
    public function posts($id)
    {
        //selected category
        $category = Category::findOrFail($id);
        //check if this sub category or not
        $parents = [1,2];
        if (!in_array($category->parent_id, $parents)) {
            $id = $category->parent_id ;
        }
        $child_categories = Category::where('parent_id',$id)->get();
        $sub_ids = Category::where('parent_id',$id)->get()->pluck('id')->toArray();
        $data['sub_categories'] = (SubCategoryResources::collection($child_categories));
        $posts = Post::whereIn('category_id',$sub_ids)->orWhere('category_id',$id)->active()->paginate(20);
        $data['content'] = (PostResources::collection($posts))->response()->getData(true);
        return $this->sendResponse($data,__('lang.data_show_successfully'),200);
    }

    public function post_details($id)
    {
        $posts = Post::findOrFail($id);
        $data = new PostResources($posts);
        return $this->sendResponse($data,__('lang.data_show_successfully'),200);
    }
}
