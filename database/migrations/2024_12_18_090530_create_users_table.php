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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('profile_picture');
            $table->string('password')->unique(); 
            $table->unsignedBigInteger('department_id'); // Foreign key for product category
            $table->enum('status', ['Active', 'Inactive'])->default('Active'); 
            $table->timestamps();
            $table->foreign('department_id')
            ->references('department_id') 
            ->on('departments')         
            ->onDelete('SET NULL');   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
