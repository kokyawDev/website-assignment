<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Contracts\Validation\Rule;

class ProductValidationRule implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
//    public function validate(string $attribute, mixed $value, Closure $fail): void
//    {
//        //
//    }
    public function passes($attribute, $value)
    {
        if(empty($value)) {
            return false;
        }

        foreach ($value as $product) {
            if (!isset($product['id']) || !isset($product['qty'])) {
                return false;
            }

            if (!is_numeric($product['id']) || !is_numeric($product['qty'])) {
                return false;
            }
        }

        return true;
    }

    public function message()
    {
        return 'Invalid product data.';
    }


}
