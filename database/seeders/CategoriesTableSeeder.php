<?php

namespace Database\Seeders;

use App\Models\Category;

use Illuminate\Database\Seeder;


class CategoriesTableSeeder extends Seeder
{
    
    public function run(): void
    {   
    
        $csvFile = fopen(base_path("database/csv/categories.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 1000, ",")) !== FALSE){
            if(!$firstline) {
                Category::create([
                    "name"  => $data[0],
                    "color" => $data[1],
                ]);
            }
            $firstline = false;
        }
        
        fclose($csvFile);
    }
}
