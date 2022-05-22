<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\GeneralController;
use App\Http\Resources\FavPostsResources;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Favorite;
use Illuminate\Support\Facades\Validator;

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
        try{
            $data['user_id'] = apiUser()->id;
            Favorite::create($data);
        }catch(\Exception $ex){
            return response()->json(['status' =>  401, 'msg' =>__('lang.fav_added_before') ]);
        }
        return $this->sendResponse((object)[],__('lang.data_added_successfully'),200);
    }
}
