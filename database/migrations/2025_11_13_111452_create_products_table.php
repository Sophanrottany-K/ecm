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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id'); // Primary Key// Foreign Key
            $table->unsignedBigInteger('category_id'); // Foreign Key
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('size_id');
            $table->string('name');
            $table->string('image');
            $table->text('description')->nullable(); //can be null
            $table->decimal('price', 10, 2);
            $table->integer('stock');
            $table->enum('status', ['Active', 'Inactive', 'OutOfStock', 'Discontinued', 'Draft'])
                ->default('Active');
            $table->timestamps();


            $table->foreign('size_id')->references('size_id')->on('sizes')->onDelete('cascade');
            $table->foreign('color_id')->references('color_id')->on('colors')->onDelete('cascade');

            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
