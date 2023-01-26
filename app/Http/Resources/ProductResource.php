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
            'name' => $this->name,
            'image' => $this->image,
            'discount' => $this->discount,
            'price' => $this->price,
            'amount' => $this->amount,
            'credit' => [response()->json(['credit_duration' => $this->credit_duration, 'credit_monthly_payment' => $this->credit_monthly_payment])->getData()]
        ];
    }
}
