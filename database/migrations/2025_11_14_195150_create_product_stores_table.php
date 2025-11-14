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
        Schema::create('product_stores', function (Blueprint $table) {
            $table->bigIncrements('product_store_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('store_id');
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
            $table->foreign('store_id')->references('store_id')->on('stores')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_stores');
    }
};
