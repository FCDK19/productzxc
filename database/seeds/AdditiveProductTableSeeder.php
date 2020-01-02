<?php

use Illuminate\Database\Seeder;

class AdditiveProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('additive_product')->insert([
        'product_id' => 1,
        'additive_id' => 1,
        ]);
    }
}
