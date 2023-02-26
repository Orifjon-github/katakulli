<?php

namespace App\Http\Resources;

use App\Models\Settings\Advantage;
use App\Models\Settings\SingleSettingItem;
use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
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
            'phone' => $this->singleSettingItems->phone,
            'address' => $this->singleSettingItems->address,
            'map' => $this->singleSettingItems->map,
            'iframe_url' => $this->singleSettingItems->iframe_url,
            'logos' => LogoResource::collection($this->logos),
            'socials' => SocialResource::collection($this->socials),
            'advantages' => AdvantageResource::collection($this->advantages),
        ];
    }
}
