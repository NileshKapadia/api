<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class productResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'description' => $this->details,
            'price' => $this->price,
            'stock' => $this->stock,
            'discount' => $this->discount,
            
            'href'=> [
                'reviews'=> route('reviews.index',$this->id)
            ]
        ];
    }
}
