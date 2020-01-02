<?php

use Illuminate\Database\Seeder;

class ProductSizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_sizes')->insert([
            'product_id' => 1,
            'name' => Str::random(10),
            'price' => rand(20, 100),
            'last_update' => Str::random(10),
        ]);
    }
}
