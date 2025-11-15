<?php

namespace App\Http\Controllers;

use App\Models\ProductImage;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductImageController extends Controller
{
    // List all images for a product
    public function index($product_id)
    {
        $product = Product::findOrFail($product_id);
        $images  = $product->images()->get();

        return view('product_images.index', compact('product', 'images'));
    }

    // Show form to upload new image
    public function create($product_id)
    {
        $product = Product::findOrFail($product_id);
        return view('product_images.create', compact('product'));
    }

    // Store uploaded image
    public function store(Request $request, $product_id)
    {
        $request->validate([
            'image' => 'required|image|max:2048', // max 2MB
        ]);

        $product = Product::findOrFail($product_id);

        // Store the image in storage/app/public/product_images
        $path = $request->file('image')->store('product_images', 'public');

        ProductImage::create([
            'product_id' => $product->product_id,
            'image_url'  => $path
        ]);

        return redirect()->route('product_images.index', $product->product_id)
            ->with('success', 'Image uploaded successfully.');
    }

    // Delete image
    public function destroy($image_id)
    {
        $image = ProductImage::findOrFail($image_id);

        // Delete file from storage
        if (Storage::disk('public')->exists($image->image_url)) {
            Storage::disk('public')->delete($image->image_url);
        }

        $product_id = $image->product_id;
        $image->delete();

        return redirect()->route('product_images.index', $product_id)
            ->with('success', 'Image deleted successfully.');
    }
}
