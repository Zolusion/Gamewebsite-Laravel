<?php

namespace Database\Factories;

use App\Models\Price;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class PriceFactory extends Factory
{

    protected $model = Price::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'price' => $this->faker->randomFloat(2, 2, 6),
            'effdate' => $this->faker->dateTime,
            'product_id' => Product::all()->random()->id
        ];
    }
}
