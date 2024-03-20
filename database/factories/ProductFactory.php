<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {   
        return [  
            'category_id'   => rand(1, 5),
            'name'          => fake()->name(),
            'description'   => fake()->text(),
            'image'         => fake()->imageUrl(),
            'ean_code'      => $this->generateEanCode(),
            'price'         => $this->generatePrice(),
            'evidence'      => fake()->boolean(false),
            'created_at'    => now(),
            'updated_at'    => now(),
        ];
    }

    private function generateEanCode(){
        return rand(1000000000000, 9999999999999);
    }

    private function generatePrice(){
        return rand(1.00, 100.00);
    }
}
