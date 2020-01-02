<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Additive;
use Faker\Generator as Faker;

$factory(App\Additive::class, 2)->create()->each(function ($additive) {
    $additive->products()->save(factory(App\Product::class)->make());
});
