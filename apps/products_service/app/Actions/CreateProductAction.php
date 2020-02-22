<?php

namespace App\Actions;
use App\Models\Product;
use App\Results\Result;

class CreateProductAction
{
  public function _construct(){

  }

  public function execute($data, Result $result): Result{

    //created product
    $product=Product::Create([
      'name' => $data['product_name'],
      'type' => $data['product_type'],
      'state' => $data['product_state'],
      'base_price' => $data['product_base_price'],
      'public_price' => $data['product_public_price'],
      'description' => $data['product_description'],
      'stock' => $data['product_initial_stock'],
      'initial_stock' => $data['product_initial_stock'],
      'reserved'  => 0

    ]);
    if ($product!=null) {
        $result->addMessage('[CREATED] # Resource created correctly');
        $result->addData('product',$product);
        $result->setStatus('SUCCESS');
        $result->setCode(202);
    }
    return $result;
  }


}
