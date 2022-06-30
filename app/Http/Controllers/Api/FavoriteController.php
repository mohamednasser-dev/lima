<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\GeneralController;
use App\Http\Resources\FavPostsResources;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Favorite;

class FavoriteController extends GeneralController
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }
    public function index()
    {
        $posts = Favorite::where('user_id',apiUser()->id)->whereHas('Post')->paginate(20);
        $data = (FavPostsResources::collection($posts))->response()->getData(true);
        return $this->sendResponse($data,__('lang.data_show_successfully'),200);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'post_id' => 'required|exists:posts,id',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' =>  401, 'msg' => $validator->messages()->first()]);
        }
        if (!apiUser()) {
            return $this->errorLoginResponse(__('lang.should_login_first'), null, failed());
        }
        $user_id = apiUser()->id;
        try{
            $data['user_id'] = $user_id;
            Favorite::create($data);
            return $this->sendResponse((object)[],__('lang.fav_added_successfully'),200);
        }catch(\Exception $ex){
            Favorite::where('user_id',$user_id)->where('post_id',$request->post_id)->delete();
            return $this->sendResponse((object)[],__('lang.fav_removed_successfully'),200);
        }
    }
}
