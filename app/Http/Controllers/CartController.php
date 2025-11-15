<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Show the current user's cart
    public function index()
    {
        $cart = Cart::firstOrCreate(['user_id' => Auth::id()]);
        $items = $cart->items()->with('product')->get();

        return view('cart.index', compact('cart', 'items'));
    }

    // Add product to cart
    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,product_id',
            'quantity'   => 'required|integer|min:1'
        ]);

        $cart = Cart::firstOrCreate(['user_id' => Auth::id()]);

        $product = Product::findOrFail($request->product_id);

        $cartItem = CartItem::updateOrCreate(
            ['cart_id' => $cart->cart_id, 'product_id' => $product->product_id],
            [
                'quantity' => \DB::raw("quantity + {$request->quantity}"),
                'price'    => $product->price
            ]
        );

        return redirect()->back()->with('success', 'Product added to cart!');
    }

    // Remove item from cart
    public function remove($cart_item_id)
    {
        $item = CartItem::findOrFail($cart_item_id);
        $item->delete();

        return redirect()->back()->with('success', 'Item removed from cart.');
    }

    // Update item quantity
    public function update(Request $request, $cart_item_id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $item = CartItem::findOrFail($cart_item_id);
        $item->update(['quantity' => $request->quantity]);

        return redirect()->back()->with('success', 'Cart updated successfully.');
    }

    // Clear the cart
    public function clear()
    {
        $cart = Cart::firstOrCreate(['user_id' => Auth::id()]);
        $cart->items()->delete();

        return redirect()->back()->with('success', 'Cart cleared.');
    }
}
