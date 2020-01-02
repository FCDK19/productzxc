<?php

use Illuminate\Database\Seeder;

class AdditivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('additives')->insert([
            'name' => Str::random(10),
            'last_update' => Str::random(10),
        ]);
    }
}
