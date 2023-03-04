<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $short_text = [];
        foreach (unserialize($this->short_text) as $text) {
            $array = [];
            $array['text'] = $text;
            $short_text[] = $array;
        }

        $long_text = [];
        foreach (unserialize($this->long_text) as $text) {
            $array = [];
            $array['text'] = $text;
            $long_text[] = $array;
        }
        return [
            'short_text' => $short_text,
            'long_text' => $long_text,
            'image' => $this->image
        ];
    }
}
