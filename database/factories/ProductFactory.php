<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory(App\Product::class, 2)->create()->each(function ($product) {
    $product->product_sizes()->save(factory(App\ProductSize::class)->make());
});
