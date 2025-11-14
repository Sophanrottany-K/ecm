<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('transaction_id'); // Primary Key
            $table->unsignedBigInteger('payment_id'); // Foreign Key
            $table->unsignedBigInteger('order_id'); // Foreign Key
            $table->enum('type', ['Charge', 'Refund', 'Reversal']);
            $table->enum('method', ['CreditCard', 'PayPal', 'COD', 'ABA']);
            $table->string('reference_number')->nullable();
            $table->decimal('amount', 10, 2);
            $table->enum('status', ['Pending', 'Success', 'Failed', 'Reversed']);
            $table->timestamps();

            $table->foreign('payment_id')->references('payment_id')->on('payments')->onDelete('cascade');
            $table->foreign('order_id')->references('order_id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
