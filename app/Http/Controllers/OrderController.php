<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Store;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // List all orders
    public function index()
    {
        $orders = Order::with(['user', 'store'])
            ->latest()
            ->paginate(10);

        return view('orders.index', compact('orders'));
    }

    // Show create form
    public function create()
    {
        $users  = User::all();
        $stores = Store::all();

        return view('orders.create', compact('users', 'stores'));
    }

    // Store a new order
    public function store(Request $request)
    {
        $request->validate([
            'user_id'          => 'required|exists:users,user_id',
            'store_id'         => 'required|exists:stores,store_id',
            'status'           => 'required|in:pending,shipped,delivered,cancelled',
            'shipping_address' => 'required|string|max:255',
            'order_date'       => 'required|date',
        ]);

        Order::create($request->all());

        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    // Show edit form
    public function edit($id)
    {
        $order  = Order::findOrFail($id);
        $users  = User::all();
        $stores = Store::all();

        return view('orders.edit', compact('order', 'users', 'stores'));
    }

    // Update an order
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id'          => 'required|exists:users,user_id',
            'store_id'         => 'required|exists:stores,store_id',
            'status'           => 'required|in:pending,shipped,delivered,cancelled',
            'shipping_address' => 'required|string|max:255',
            'order_date'       => 'required|date',
        ]);

        $order = Order::findOrFail($id);
        $order->update($request->all());

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    // Delete an order
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}
