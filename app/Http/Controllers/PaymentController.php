<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // List all payments
    public function index()
    {
        $payments = Payment::with('order')->latest()->paginate(10);
        return view('payments.index', compact('payments'));
    }

    // Show create form
    public function create()
    {
        $orders = Order::all();
        return view('payments.create', compact('orders'));
    }

    // Store payment
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,order_id',
            'method'   => 'required|in:CreditCard,PayPal,COD,ABA',
            'amount'   => 'required|numeric|min:0',
            'status'   => 'required|in:Pending,Processing,Success,Failed,Cancelled,Refunded,Expired'
        ]);

        Payment::create($request->all());

        return redirect()->route('payments.index')->with('success', 'Payment created successfully.');
    }

    // Show edit form
    public function edit($id)
    {
        $payment = Payment::findOrFail($id);
        $orders = Order::all();
        return view('payments.edit', compact('payment', 'orders'));
    }

    // Update payment
    public function update(Request $request, $id)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,order_id',
            'method'   => 'required|in:CreditCard,PayPal,COD,ABA',
            'amount'   => 'required|numeric|min:0',
            'status'   => 'required|in:Pending,Processing,Success,Failed,Cancelled,Refunded,Expired'
        ]);

        $payment = Payment::findOrFail($id);
        $payment->update($request->all());

        return redirect()->route('payments.index')->with('success', 'Payment updated successfully.');
    }

    // Delete payment
    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();

        return redirect()->route('payments.index')->with('success', 'Payment deleted.');
    }
}
