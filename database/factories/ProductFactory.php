<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    protected $model = Product::class;
 
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->paragraph(15),
            'category_id' => Category::all()->random()->id
        ];
    }
}
