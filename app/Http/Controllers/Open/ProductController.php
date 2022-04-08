<?php

namespace App\Http\Controllers\Open;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;


class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with('latest_price', 'category')->paginate(12);
        return view('open.products.index', compact('products'));
    }

    public function show(Product $product)
    {
        $reviews = Review::where('product_id', '=', $product->id)->paginate(3);
        return view('open.products.show', compact('product', 'reviews'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function overons()
    {
        return view('overons');
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $products = Product::where('name', 'LIKE', '%' . $search_text . '%')->with('category')->get();

        return view('open.products.search', compact('products'));
    }


}
