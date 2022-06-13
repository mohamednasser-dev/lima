<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FavPostsResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $fav = false;
        $is_liked = false;
        $free = $this->Post->free;
        if (apiUser()) {
            //check favorite
            $exists_fav = apiUser()->Favorites->where('post_id', $this->post_id)->first();
            if ($exists_fav) {
                $fav = true;
            } else {
                $fav = false;
            }
            //check favorite
            $exists_like = apiUser()->Likes->where('post_id', $this->post_id)->first();
            if ($exists_like) {
                $is_liked = true;
            } else {
                $is_liked = false;
            }
            //check subscription
            if ($this->Post->free == 0) {
                if (apiUser()->subscriber == 1) {
                    $free = 1;
                } else {
                    $free = 0;
                }
            }
        }
        return [
            'fav_id' => $this->id,
            'id' => (integer)$this->post_id,
            'name' => $this->Post->name,
            'video' => $this->Post->video,
            'image' => $this->Post->image,
            'likes' => (integer)$this->Post->likes,
            'views' => (integer)$this->Post->views,
            'type' => $this->Post->type,
            'free' => $free,
            'category_id' => $this->Post->category_id,
            'category' => $this->Post->Category->name,
            'fav' => $fav,
            'is_liked' => $is_liked,
        ];
    }
}
