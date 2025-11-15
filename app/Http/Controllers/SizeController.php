<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    // List all sizes
    public function index()
    {
        $sizes = Size::latest()->paginate(10);
        return view('products.sizes.index', compact('sizes'));
    }

    // Show create form
    public function create()
    {
        return view('products.sizes.create');
    }

    // Store a new size
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:10'
        ]);

        Size::create($request->all());

        return redirect()->route('size.index')
            ->with('success', 'Size created successfully.');
    }

    // Show edit form
    public function edit($size_id)
    {
        $size = Size::findOrFail($size_id);
        return view('products.sizes.edit', compact('size'));
    }

    // Update size
    public function update(Request $request, $size_id)
    {
        $request->valsize_idate([
            'name' => 'required|string|max:10'
        ]);

        $size = Size::findOrFail($size_id);
        $size->update($request->all());

        return redirect()->route('size.index')
            ->with('success', 'Size updated successfully.');
    }

    // Delete size
    public function destroy($size_id)
    {
        $size = Size::findOrFail($size_id);
        $size->delete();

        return redirect()->route('size.index')
            ->with('success', 'Size deleted successfully.');
    }
}
