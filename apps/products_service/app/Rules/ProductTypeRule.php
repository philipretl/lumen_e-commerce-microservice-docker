<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ProductTypeRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */

    private $types;
    private $value;
    private $attrattribute;

    public function __construct()
    {
        $this->types=['product','promotion'];
        $this->value;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {   $flag=false;

        $this->value=$value;
        $this->attribute=$attribute;

        if (in_array($value, $this->types)) {
          $flag=true;
        }
        return $flag;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '[ERR_PRODUCT_TYPE] # ['.$this->attribute.'] # The value '.$this->value.' for the field '.$this->attribute. ' is not supported yet  ' ;
    }
}
