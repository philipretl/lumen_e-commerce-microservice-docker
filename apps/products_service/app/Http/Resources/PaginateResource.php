<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PaginateResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      $array=parent::toArray($request);
      $array['paginated']=$array['data'];

      $this->array_unshift_assoc($array,'paginated',$array['paginated']);
      unset($array['data']);

      return [$array];
    }

    function array_unshift_assoc(&$arr, $key, $val)
    {
        $arr = array_reverse($arr, true);
        $arr[$key] = $val;
        return array_reverse($arr, true);
    }
}
