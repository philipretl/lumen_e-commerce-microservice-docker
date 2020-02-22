<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use \Askedio\SoftCascade\Traits\SoftCascadeTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
  use SoftCascadeTrait;
  use SoftDeletes;

    protected $table='product';
    protected $fillable=[
      'name',
      'type',
      'state',
      'base_price',
      'public_price',
      'description',
      'stock',
      'initial_stock',
      'reserved',
      'sold',
    ];

    public function images(){
      return $this->hasMany('App\Models\ProductImage','product_id');
    }

    public function getAvailableStock(){
      return $this->initialStock - $this->reserved - $this->sold;
    }
}
