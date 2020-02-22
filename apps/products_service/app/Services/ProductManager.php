<?php

namespace App\Services;

use App\Results\Result;
use App\Validators\ProductStoreValidator;
use App\Validators\ImageStoreValidator;
use App\Services\Interfaces\IProductManager;
use App\Actions\ListProductsAction;
use App\Actions\CreateProductAction;

class ProductManager implements IProductManager
{

  public function listProduct(): Result
  {
    $result = new Result();
    $actionList = new ListProductsAction();

    $result=$actionList->execute($result);

    return $result;

  }

  public function registerProduct($data): Result
  {
    $result = new Result();
    $action = new CreateProductAction();


    if ($this->validateProduct($data,$result)) {
      $action->execute($data, $result);
    }
    return $result;

  }

  private function validateProduct($data,Result $result){
    $flag=true;
    $validatorProduct = new ProductStoreValidator();
    $validatorImage = new ImageStoreValidator();

    if ($validatorProduct->execute($data, $result)->getStatus()!='VALIDATED'){
      $flag=false;
    }

    if($validatorImage->execute($data, $result)->getStatus()!='VALIDATED'){
      $flag=false;
    }

    return $flag;
  }
}
