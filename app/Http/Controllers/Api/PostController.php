<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\GeneralController;
use App\Http\Resources\SubCategoryResources;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\PostResources;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\PostLike;
use App\Models\PostView;
use App\Models\Post;

class PostController extends GeneralController
{
    public function __construct(Post $model)
    {
        parent::__construct($model);
    }

    public function sub_categories($id)
    {
        //selected category
        $category = Category::findOrFail($id);
        //check if this sub category or not
        $parents = [1, 2];
        if (!in_array($category->parent_id, $parents)) {
            $id = $category->parent_id;
        }
        $child_categories = Category::where('parent_id', $id)->get();
        $data = (SubCategoryResources::collection($child_categories));

        return $this->sendResponse($data, __('lang.data_show_successfully'), 200);
    }
    public function posts($id)
    {
        //selected category
        $category = Category::findOrFail($id);
        //check if this sub category or not
        $parents = [1, 2];
        if (!in_array($category->parent_id, $parents)) {
            $posts = $this->model::Where('category_id', $id)->active()->paginate(20);
        }else{
            $sub_ids = Category::where('parent_id', $id)->get()->pluck('id')->toArray();
            if(count($sub_ids) > 0){
                $posts = $this->model::whereIn('category_id', $sub_ids)->active()->paginate(20);
            }else{
                $posts = $this->model::where('category_id', $id)->active()->paginate(20);
            }
        }
        $data = (PostResources::collection($posts))->response()->getData(true);
        return $this->sendResponse($data, __('lang.data_show_successfully'), 200);
    }

    public function post_details($id)
    {

        $post = $this->model::findOrFail($id);
        $data = new PostResources($post);
        //make user view
        if (apiUser()) {
            //check if viewed before
            $exists_view = PostView::where('post_id', $id)->where('user_id', apiUser()->id)->first();
            if (!$exists_view) {
                $view_data['post_id'] = $id;
                $view_data['user_id'] = apiUser()->id;
                PostView::create($view_data);
                $post->views = $post->views + 1;
                $post->save();
            }
        }
        return $this->sendResponse($data, __('lang.data_show_successfully'), 200);
    }

    public function like_store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'post_id' => 'required|exists:posts,id',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 401, 'msg' => $validator->messages()->first()]);
        }
        try {
            $post = Post::findOrFail($request->post_id);
            $exist_like = PostLike::where('user_id', apiUser()->id)->where('post_id', $request->post_id)->first();
            if ($exist_like) {
                $exist_like->delete();
                if ($post->likes != 0) {
                    $post->likes = $post->likes - 1;
                    $post->save();
                }
                return $this->sendResponse((object)[], trans('lang.liked__removed_s'), 200);
            } else {
                $data['user_id'] = apiUser()->id;
                PostLike::create($data);
                $post->likes = $post->likes + 1;
                $post->save();
                return $this->sendResponse((object)[], trans('lang.liked_s'), 200);
            }
        } catch (\Exception $ex) {
            return response()->json(['status' => 401, 'msg' => __('lang.like_added_before')]);
        }

    }
}
