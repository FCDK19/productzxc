<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function product_sizes()
    {
        return $this->hasMany('App\ProductSize');
    }

    function categories()
    {
        return $this->belongsTo('App\Category');
        
    }

    public function additives()
    {
        return $this->belongsToMany('App\Additive');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
