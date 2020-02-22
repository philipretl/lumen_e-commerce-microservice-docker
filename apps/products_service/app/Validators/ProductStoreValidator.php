<?php

namespace App\Validators;

use App\Results\Result;
use App\Rules\ProductTypeRule;
use Illuminate\Support\Facades\Validator;

class ProductStoreValidator
{

    public function execute($data, Result $result){

      $validator=Validator::make($data,[
          'product_name'=> ['required', 'string', 'max:100'],
          'product_type'=> ['required', 'string', new ProductTypeRule()],
          'product_state' => ['required','string'],
          'product_base_price' =>['required','numeric'],
          'product_public_price' => ['required', 'numeric'],
          'product_description' => ['string'],
          'product_initial_stock' => ['required' ,'integer'],
        ]);
      $result->setStatus('VALIDATED');

      if ($validator->fails()) {
          $result->setAllError($validator->errors());
          $result->addMessage('[ERR_CHECK_DATA] # The form has errors whit the inputs');
          $result->setStatus('FAIL');
          $result->setCode(400);
      }


      return $result;


    }

}
