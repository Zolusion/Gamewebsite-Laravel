<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Price;
use Carbon\Carbon;
use Session;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:index product', ['only' => ['index']]);
        $this->middleware('permission:show product', ['only' => ['show',]]);
        $this->middleware('permission:create product', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit product', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete product', ['only' => ['delete', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category', 'latest_price')->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->save();

        $price = new Price();
        $price->price = $request->price;
        $price->effdate = Carbon::now();
        $price->product_id = $product->id;
        $price->save();

        return redirect()->route('products.index')->with('message', 'product en prijs toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->save();

        if ($product->latest_price->price == $request->price) {
            $price = new Price();
            $price->price = $request->price;
            $price->effdate = Carbon::now();
            $price->product_id = $product->id;
            $price->save();
        }

        return redirect()->route('products.index')->with('message', 'Product gewijzigd');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.delete', compact('product', 'categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('status', 'Product verwijdert');
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $products = Product::where('title', 'LIKE', '%' . $search_text . '%')->with('category')->get();

        return view('layouts.search', compact('products'));
    }
}
