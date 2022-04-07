<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::factory()
            ->times(20)
            ->create();
    }

    public function show(Product $product)
    {
        $reviews = Review::where('product_id', '=', $product->id)->paginate(3);
        return view('open.products.show', compact('product', 'reviews'));
    }
}
