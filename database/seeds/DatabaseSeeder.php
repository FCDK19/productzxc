<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriesTableSeeder::class,
            ProductsTableSeeder::class,
            AdditivesTableSeeder::class,
            TagsTableSeeder::class,
            ProductSizesTableSeeder::class,
            AdditiveProductTableSeeder::class,
            ProductTagTableSeeder::class,
            
        ]);
    }
}
