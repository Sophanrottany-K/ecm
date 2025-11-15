<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Show cart
    public function index()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login to view your cart.');
        }

        // Get or create cart for the user
        $cart = Cart::firstOrCreate(
            ['user_id' => $user->user_id]
        );

        // Eager load items with their products
        $cart->load('items.product');

        return view('cartNcheckout', compact('cart'));
    }

    // Add to cart
    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,product_id',
            'quantity'   => 'required|integer|min:1'
        ]);

        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login first.');
        }

        $cart = Cart::firstOrCreate(['user_id' => $user->user_id]);

        $product = Product::where('product_id', $request->product_id)->firstOrFail();

        $item = CartItem::firstOrNew([
            'cart_id' => $cart->cart_id,
            'product_id' => $product->product_id
        ]);

        $item->quantity = ($item->exists ? $item->quantity + $request->quantity : $request->quantity);
        $item->price = $product->price;
        $item->save();

        return redirect()->route('cart.index')->with('success', 'Product added to cart!');
    }

    // Update cart item quantity
    public function update(Request $request, $product_id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $user = Auth::user();
        $cart = Cart::firstOrCreate(['user_id' => $user->user_id]);

        $item = CartItem::where('cart_id', $cart->cart_id)
            ->where('product_id', $product_id)
            ->first();

        if ($item) {
            $item->quantity = $request->quantity;
            $item->save();
        }

        return back()->with('success', 'Cart updated!');
    }

    // Remove item from cart
    public function remove($product_id)
    {
        $user = Auth::user();
        $cart = Cart::firstOrCreate(['user_id' => $user->user_id]);

        CartItem::where('cart_id', $cart->cart_id)
            ->where('product_id', $product_id)
            ->delete();

        return back()->with('success', 'Item removed!');
    }
}
