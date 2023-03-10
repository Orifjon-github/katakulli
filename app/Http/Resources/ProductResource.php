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
        $single_images = [];
        foreach (unserialize($this->single_images) as $text) {
            $array = [];
            $array['image'] = $text;
            $single_images[] = $array;
        }

        return [
            'id' => $this->id,
            'category_id' => $this->category_id,
            'name' => $this->name,
            'price' => $this->price,
            'main_image' => $this->main_image,
            'single_images' => $single_images,
            'short_description' => $this->short_description,
            'long_description' => $this->long_description,
            'count' => $this->count,
            ];
    }
}
