<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Payment;
use App\Models\Order;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    // List all transactions
    public function index()
    {
        $transactions = Transaction::with(['payment', 'order'])
            ->latest()
            ->paginate(10);

        return view('transactions.index', compact('transactions'));
    }

    // Show create form
    public function create()
    {
        $payments = Payment::all();
        $orders   = Order::all();

        return view('transactions.create', compact('payments', 'orders'));
    }

    // Store transaction
    public function store(Request $request)
    {
        $request->validate([
            'payment_id' => 'required|exists:payments,payment_id',
            'order_id'   => 'required|exists:orders,order_id',
            'type'       => 'required|in:Charge,Refund,Reversal',
            'method'     => 'required|in:CreditCard,PayPal,COD,ABA',
            'reference_number' => 'nullable|string|max:255',
            'amount'     => 'required|numeric|min:0',
            'status'     => 'required|in:Pending,Success,Failed,Reversed',
        ]);

        Transaction::create($request->all());

        return redirect()->route('transactions.index')
            ->with('success', 'Transaction created successfully.');
    }

    // Show edit form
    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        $payments    = Payment::all();
        $orders      = Order::all();

        return view('transactions.edit', compact('transaction', 'payments', 'orders'));
    }

    // Update transaction
    public function update(Request $request, $id)
    {
        $request->validate([
            'payment_id' => 'required|exists:payments,payment_id',
            'order_id'   => 'required|exists:orders,order_id',
            'type'       => 'required|in:Charge,Refund,Reversal',
            'method'     => 'required|in:CreditCard,PayPal,COD,ABA',
            'reference_number' => 'nullable|string|max:255',
            'amount'     => 'required|numeric|min:0',
            'status'     => 'required|in:Pending,Success,Failed,Reversed',
        ]);

        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());

        return redirect()->route('transactions.index')
            ->with('success', 'Transaction updated successfully.');
    }

    // Delete transaction
    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        return redirect()->route('transactions.index')
            ->with('success', 'Transaction deleted successfully.');
    }
}
