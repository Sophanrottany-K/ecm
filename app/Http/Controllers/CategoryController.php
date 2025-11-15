<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // List all categories
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('products.categories.index', compact('categories'));
    }

    // Show create form
    public function create()
    {
        return view('products.categories.create');
    }

    // Store a category
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:categories,category_name',
            'description' => '',
        ]);

        Category::create($request->all());

        return redirect()->route('category.index')
            ->with('success', 'Category created successfully.');
    }

    // Show edit form
    public function edit($category_id)
    {
        $category = Category::findOrFail($category_id);
        return view('products.categories.edit', compact('category'));
    }

    // Update a category
    public function update(Request $request, $category_id)
    {
        $request->validate([
            'category_name' => 'required|string|max:100',
            'description' => 'required|string',
        ]);
    }
    public function destroy($category_id)
    {
        $category = Category::where('category_id', $category_id)->firstOrFail();

        $category->delete();

        return redirect()->route('category.index')->with('success', 'Category deleted successfully!');
    }
}
