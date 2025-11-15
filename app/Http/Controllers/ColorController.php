<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    // List all colors
    public function index()
    {
        $colors = Color::latest()->paginate(10);
        return view('products.colors.index', compact('colors'));
    }

    // Show create form
    public function create()
    {
        return view('products.colors.create');
    }

    // Store a new color
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'nullable|string|'
        ]);

        Color::create($request->all());

        return redirect()->route('color.index')
            ->with('success', 'Color created successfully.');
    }

    // Show edit form
    public function edit($color_id)
    {
        $color = Color::findOrFail($color_id);
        return view('products.colors.edit', compact('color'));
    }

    // Update color
    public function update(Request $request, $color_id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'nullable|string|'
        ]);

        $color = Color::findOrFail($color_id);
        $color->update($request->all());

        return redirect()->route('color.index')
            ->with('success', 'Color updated successfully.');
    }

    // Delete color
    public function destroy($color_id)
    {
        $color = Color::findOrFail($color_id);
        $color->delete();

        return redirect()->route('color.index')
            ->with('success', 'Color deleted successfully.');
    }
}
