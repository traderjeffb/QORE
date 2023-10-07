<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class CurrencyResource extends JsonResource
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
            'rates' => json_decode($this->rate),
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),

        ];
        return parent::toArray($request);
    }
}
