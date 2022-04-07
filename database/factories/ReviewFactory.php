<?php

namespace Database\Factories;
use App\Models\Review;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition()
    {
        return [
            'comment' => $this->faker->paragraph(15),
            'user_id' => User::all()->random()->id,
            'product_id' => Product::all()->random()->id
        ];
    }
}
