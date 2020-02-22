<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
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
          'id'=> $this->id,
          'name'=> $this->name,
          'type'=> $this->type,
          'state' => $this->state,
          'precio'=> $this->precio,
          'description' => $this->description,
          'stock' => $this->getAvailableStock(),
          'reserved'=> $this->reserved,
          'sold' => $this->sold,

        ];
    }
}
