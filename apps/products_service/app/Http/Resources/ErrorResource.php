<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ErrorResource extends Resource
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
        'code_message'=> $this->getCodeMessage(),
        'field' => $this->getField(),
        'message' => $this->getMessage(),
      ];
    }
}
