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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id'); // Primary Key
            $table->unsignedBigInteger('user_id'); // Foreign Key
            $table->unsignedBigInteger('store_id'); // Foreign Key
            $table->enum('status', ['pending',  'shipped', 'delivered', 'cancelled'])->default('pending');
            $table->string('shipping_address');
            $table->dateTime('order_date');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('store_id')->references('store_id')->on('stores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
