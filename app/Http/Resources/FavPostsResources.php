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
        $free = $this->free;
        if (apiUser()) {
            //check favorite
            $exists_fav = apiUser()->Favorites->where('post_id', $this->id)->first();
            if ($exists_fav) {
                $fav = true;
            } else {
                $fav = false;
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
            'fav_id' => $this->id,
            'id' => $this->post_id,
            'name' => $this->Post->name,
            'video' => $this->Post->video,
            'image' => $this->Post->image,
            'likes' => $this->Post->Likes->count(),
            'views' => $this->Post->Views->count(),
            'type' => $this->Post->type,
            'free' => $free,
            'category_id' => $this->Post->category_id,
            'category' => $this->Post->Category->name,
            'fav' => $fav,
        ];
    }
}