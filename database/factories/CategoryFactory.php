<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

factory(App\Category::class, 2)->create()->each(function ($category) {
    $category->products()->save(factory(App\Product::class)->make());
});