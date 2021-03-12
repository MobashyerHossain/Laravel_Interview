<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariantPrice extends Model
{
    function getProductVariants(){
        return ProductVariant::whereIn('id', [$this->product_variant_one, $this->product_variant_two, $this->product_variant_three])->get();
    }
}
