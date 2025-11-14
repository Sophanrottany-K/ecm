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
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('payment_id'); // Primary Key
            $table->unsignedBigInteger('order_id'); // Foreign Key
            $table->enum('method', ['CreditCard', 'PayPal', 'COD', 'ABA']); // Payment Method
            $table->decimal('amount', 10, 2);
            $table->enum('status', ['Pending', 'Processing', 'Success', 'Failed', 'Cancelled', 'Refunded', 'Expired'])
                ->default('Pending');
            $table->timestamps();

            $table->foreign('order_id')->references('order_id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
