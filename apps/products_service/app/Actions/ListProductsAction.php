<?php

namespace App\Actions;

use App\Models\Product;
use App\Results\Result;


class ListProductsAction
{

  public function execute(Result $result): Result{

    $products=Product::paginate(15);

    if ($products->isEmpty()) {

      $result->setStatus('EMPTY');
      $result->addMessage('[EMPTY_DATA] # Empty data from resource requested');
      $result->setCode(200);
    }else{
      $result->setStatus('SUCCESS');
      $result->addData('products', $products);
      $result->addMessage('[LIST_DATA] # List Data from resource requested');
      $result->addMessage('[LIST_DATA_PAGINATED] # List Data paginated from resource requested');
    }
    return $result;
  }
}
