<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Throwable;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:index category', ['only' => ['index']]);
        $this->middleware('permission:show category', ['only' => ['show']]);
        $this->middleware('permission:create category', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit category', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete category', ['only' => ['delete', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return view
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoryStoreRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryStoreRequest $request)
    {



        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect()->route('categories.index')->with('message', 'categorie toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  Category $category
     * @return view
     */
    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return view
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CategoryUpdateRequest $request
     * @param  Category $category
     * @return RedirectResponse
     */
    public function update(Request $request, Category $category)
    {
        $category->name = $request->name;
        $category->save();

        return redirect()->route('categories.index')->with('message', 'categorie gewijzigd');
    }
    /**
     * 
     * @param Category $category
     * @return view
     */
    public function delete(Category $category) 
    {
        return view('admin.categories.delete', compact('category'));        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category $category
     * @return RedirectResponse
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();
        }   catch (Throwable $error)
        {
            report($error);
            return redirect()->route('categories.index')->with('status', 'Categorie is niet leeg.
            Er mogen geen producten meer in de categorie staan');
        }

        return redirect()->route('categories.index')->with('message', 'categorie verwijderd');
    }

    public function contact()
    {
        return view('contact');
    }
}
