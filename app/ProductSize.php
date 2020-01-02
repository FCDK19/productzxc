<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    function products()
    {
        return $this->belongsTo('App\Product');
        
    }
}
