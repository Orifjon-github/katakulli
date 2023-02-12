<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'category_id' => $this->category_id,
            'name' => $this->name,
            'image' => $this->image,
            'description' => $this->description,
            'time' => $this->time,
            'count' => $this->count,
            'sizes' => unserialize($this->size),
            'sub_title' => $this->sub_title,
//            'sizes' => SizeResource::collection($this->sizes),
            ];
    }
}
