<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    public function run()
    {   
        $this->getFileCsv();
    }

    private function getFileCsv(){
        $csvFile = fopen(base_path("database/csv/categories.csv"), "r");

        $firstline = true;
        while(($data = fgetcsv($csvFile, 1000, ",")) !== FALSE){
            if(!$firstline){
                DB::table('categories')->insert([
                    "name"  => $data[0],
                    "color" => $data[1],
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
