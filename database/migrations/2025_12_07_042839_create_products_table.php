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
        // Create categories table
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Create products table
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('quantity')->default(0);
            $table->decimal('price', 10, 2);
            $table->decimal('amount', 10, 2)->storedAs('quantity * price');
            $table->string('sku')->unique();
            $table->text('description')->nullable();
            $table->integer('stock')->default(0);

            // Add category relationship
            $table->foreignId('category_id')
                  ->nullable()
                  ->constrained('categories')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // drop in correct order (products first)
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
    }
};
