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
            $table->id();
            $table->string('name', 150); // Product name
            $table->string('image');
            $table->text('description')->nullable(); // Product description
            $table->decimal('price', 10, 2)->default(0.00); // Product price
            $table->integer('quantity')->default(0); // Quantity in stock
            $table->enum('status', ['Available', 'Out of Stock', 'Discontinued'])->default('Available'); // Product status
            // Foreign key constraint
            $table->foreignId('category_id')
                  ->constrained()
                  ->cascadeOnDelete(); // Deletes products when the category is deleted

            $table->timestamps();
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
