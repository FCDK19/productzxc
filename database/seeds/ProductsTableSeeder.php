<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'foreign_id' => rand(1, 10),
            'client_id' => rand(1, 10),
            'name' => Str::random(10),
            'descr' => Str::random(10),
            'price' => rand(20, 100),
            'popular' => rand(1, 10),
            'category_id' => 1,
            'last_update' => Str::random(10),
        ]);
    }
}
