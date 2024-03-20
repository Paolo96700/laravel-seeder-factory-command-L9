<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;


class ProductsSeeder extends Seeder
{   

    public function run()
    {   
        Product::factory()->count(5)->state($this->visiblePosts())->create();
        Product::factory()->count(15)->create(); 
    }
    
    private function visiblePosts(){
        return ['evidence' => true];
    }
}
