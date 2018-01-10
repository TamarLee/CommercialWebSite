<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => str_random(10),
            'description' => str_random(10),
            'price' => rand(500, 5000),
            'old_price' => rand(500, 5000),
            'rating' => rand(500, 5000)/100,
            'image_url' => str_random(10)
            ]);
    }
}
