<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GivetemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $user  = new UserResource($this->whenLoaded('giver'));
        return [
            "title" => $this->title,
            "image_url" => $this->image_url,
            "caption" => $this->caption,
            "rating" => $this->rating,
            "pickup_location" => $this->pickup_location,
            "info" => $this->info,
            "tags" => $this->tags,
            "giver" => $this->giverNameorEmpty($user),
        ];
    }

    /**
     * Gets the giver firstname if the
     * user itself is avialble, if not return our default
     * giver name
     * @param \App\User
     * @return string
     */
    public function giverNameorEmpty($user)
    {
        return (is_null($user) || !isset($user))
            ? 'good samartian'
            : $user->name;
    }
}
