<?php

namespace App\Validators;

use App\Results\Result;
use App\Rules\ProductTypeRule;
use Illuminate\Support\Facades\Validator;

class ImageStoreValidator
{

    public function execute($data, Result $result){

      $validator=Validator::make($data,[
          'images'=> ['array'],
          'images.*'=> ['required', 'string'],
        ]);
      $result->setStatus('VALIDATED');

      if ($validator->fails()) {
          $result->setAllError($validator->errors());
          $result->addMessage('[ERR_CHECK_DATA] # The form has errors whit the inputs');
          $result->addMessage('[ERR_CHECK_FORM_DATA_INTERNAL_ARRAY] # The form has errors whit the interal array');
          $result->setStatus('FAIL');
          $result->setCode(400);
      }


      return $result;


    }

}
