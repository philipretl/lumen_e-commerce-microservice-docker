<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use \Askedio\SoftCascade\Traits\SoftCascadeTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductImage extends Model
{
    use SoftCascadeTrait;
    use SoftDeletes;
    
    protected $table='product_image';
    protected $fillable=[
      'route',
      'base_64'
    ];

    public function product(){
      return $this->belongsTo('App\Models\Product');
    }
}
