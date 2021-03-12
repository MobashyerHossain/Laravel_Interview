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

}
