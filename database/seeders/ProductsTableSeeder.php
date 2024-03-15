<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    
    public function run(): void
    {
        $faker = Faker::create(); 
        $visiblePosts = 5;
        $currentIndex = 1;


        foreach(range(1, 100) as $index){
            $visible = $currentIndex <= $visiblePosts;
            $currentIndex ++;

            DB::table('products')->insert([
                'category_id'   => rand(1, 5),
                'name'          => $faker->name,
                'description'   => $faker->text(),
                'image'         => $faker->imageUrl(),
                'EAN_code'      => rand(1000000000000, 9999999999999),
                'price'         => rand(1.00, 100.00),
                'evidence'      => $faker->boolean($visible),
                'created_at'    => now(),
                'updated_at'    => now(),
            ]);
        }
    }
}
