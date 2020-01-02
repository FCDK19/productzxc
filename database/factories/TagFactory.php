<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tag;
use Faker\Generator as Faker;

$factory(App\Tag::class, 2)->create()->each(function ($tag) {
    $tag->products()->save(factory(App\Product::class)->make());
});
