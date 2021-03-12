<?php

namespace App\Models;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'sku', 'description'
    ];

    function getTimePast(){
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    function getProductVariants(){
        return ProductVariant::where('product_id', $this->id)->get();
    }

    function getImage(){
        return ProductImage::where('product_id', $this->id)->get();
    }

    function getVariantPrices(){
        return ProductVariantPrice::where('product_id', $this->id)->get();
    }

    function getTotalProductCount(){
        return count(Product::all());
    }
}
