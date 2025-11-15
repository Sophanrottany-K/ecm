<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Show all products
     */
    public function index()
    {
        $products = Product::with(['category', 'color', 'size'])->latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    /**
     * Show create product form
     */
    public function create()
    {
        return view('products.create', [
            'categories' => Category::all(),
            'colors'     => Color::all(),
            'sizes'      => Size::all(),
        ]);
    }

    /**
     * Store new product
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,category_id',
            'color_id'    => 'required|exists:colors,color_id',
            'size_id'     => 'required|exists:sizes,size_id',
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'status'      => 'required|in:Active,Inactive,OutOfStock,Discontinued,Draft',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload image
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        // Create product
        Product::create([
            'store_id'    => null,
            'category_id' => $request->category_id,
            'color_id'    => $request->color_id,
            'size_id'     => $request->size_id,
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'stock'       => $request->stock,
            'status'      => $request->status,
            'image'       => $imagePath,
        ]);

        return redirect()->route('product.index')->with('success', 'Product created successfully!');
    }

    /**
     * Show product detail page
     */
    public function show($product_id)
    {
        $product = Product::with(['category', 'color', 'size'])
            ->findOrFail($product_id);

        return view('products.index', compact('product'));
    }

    /**
     * Show edit form
     */
    public function edit($product_id)
    {
        $product = Product::findOrFail($product_id);

        return view('products.edit', [
            'product'    => $product,
            'categories' => Category::all(),
            'colors'     => Color::all(),
            'sizes'      => Size::all(),
        ]);
    }

    /**
     * Update product
     */
    public function update(Request $request, $product_id)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,category_id',
            'color_id'    => 'required|exists:colors,color_id',
            'size_id'     => 'required|exists:sizes,size_id',
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'status'      => 'required|in:Active,Inactive,OutOfStock,Discontinued,Draft',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::findOrFail($product_id);

        // Update image if new file uploaded
        if ($request->hasFile('image')) {

            // Delete old image
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            // Upload new image
            $product->image = $request->file('image')->store('products', 'public');
        }

        // Update other fields
        $product->update([
            'category_id' => $request->category_id,
            'color_id'    => $request->color_id,
            'size_id'     => $request->size_id,
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => $request->price,
            'stock'       => $request->stock,
            'status'      => $request->status,
            'image'       => $product->image,
        ]);

        return redirect()->route('product.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Delete product
     */
    public function destroy($product_id)
    {
        // Use where() instead of findOrFail() to specify the correct primary key
        $product = Product::where('product_id', $product_id)->firstOrFail();

        // Delete image file if exists
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully!');
    }
}
