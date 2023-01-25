<?php

namespace App\Http\Resources;

use App\Http\Resources\Lookups\Category;
use App\Http\Resources\Lookups\Country;
use App\Http\Resources\User;
use Illuminate\Http\Resources\Json\JsonResource;

class Opportunity extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'category' => new Category($this->category),
            'conuntry' => new Country($this->country),
            'created_by' => new User($this->user),
            'orgnisateur' => $this->organizer,
            'createdAt' => $this->created_at->format('d-m-Y à H:i:s'),
            'updatedAt' => $this->updated_at->format('d-m-Y à H:i:s'),
            'deadline' => $this->deadline->format('d-m-Y à H:i:s'),


        ];
    }
}
