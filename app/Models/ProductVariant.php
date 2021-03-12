<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    function getVarient(){
        return Variant::where('id',$this->variant_id)->get();
    }

    function getProduct(){
        return Product::where('id',$this->product_id)->get();
    }

    function getPrice(){
        return ProductVariantPrice::where('product_variant_one', $this->id)->orWhere('product_variant_two', $this->id)->orWhere('product_variant_three', $this->id)->get();
    }
}
