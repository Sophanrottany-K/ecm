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
        Schema::create('stores', function (Blueprint $table) {
            $table->bigIncrements('store_id'); // Primary Key
            $table->string('store_name', 50);
            $table->unsignedBigInteger('owner_id'); // Foreign Key to Users
            $table->string('contact_email')->unique();
            $table->string('contact_phone', 15);

            $table->enum('Status', ['PendingApproval', 'Approved', 'Inactive', 'Active', 'Declined']);
            $table->timestamps();

            $table->foreign('owner_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
