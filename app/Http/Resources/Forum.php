<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Forum extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //$table->string('question');
        //$table->unsignedBigInteger('created_by');
        return [
            'id' => $this->id,
            'question' => $this->question,
            'created_by' => new User($this->user,),
        ];
    }
}
