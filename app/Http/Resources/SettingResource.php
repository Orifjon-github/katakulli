<?php

namespace App\Http\Resources;

use App\Models\Settings\Address;
use App\Models\Settings\Email;
use App\Models\Settings\Phone;
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
            'phone' => Phone::first()->phone,
            'email' => Email::first()->email,
            'address' => Address::first()->address,
            'logos' => LogoResource::collection($this->logos),
            'socials' => SocialResource::collection($this->socials),
        ];
    }
}
