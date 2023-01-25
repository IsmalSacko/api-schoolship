<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' =>$this->id,
            'fullName' => $this->first_name.' '.$this->last_name,
            'profile'=> $this->profile_picture,
            'bio' => $this->bio,
            'token' => $this->token,


        ];
    }
}
