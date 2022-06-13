<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResources extends JsonResource
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
        $free = $this->free;
        if (apiUser()) {
            //check favorite
            $exists_fav = apiUser()->Favorites->where('post_id', $this->id)->first();
            if ($exists_fav) {
                $fav = true;
            } else {
                $fav = false;
            }
            //check favorite
            $exists_like = apiUser()->Likes->where('post_id', $this->id)->first();
            if ($exists_like) {
                $is_liked = true;
            } else {
                $is_liked = false;
            }
            //check subscription
            if ($this->free == 0) {
                if (apiUser()->subscriber == 1) {
                    $free = 1;
                } else {
                    $free = 0;
                }
            }
        }
        return [
            'id' => (integer)$this->id,
            'name' => $this->name,
            'body' => $this->body,
            'video' => $this->video,
            'image' => $this->image,
            'likes' => (integer)$this->likes,
            'views' => (integer)$this->views,
            'type' => $this->type,
            'free' => (integer)$free,
            'category_id' => $this->category_id,
            'category' => $this->Category->name,
            'fav' => $fav,
            'is_liked' => $is_liked,
        ];
    }
}
