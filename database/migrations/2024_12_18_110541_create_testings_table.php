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
        Schema::create('testings', function (Blueprint $table) {
            $table->id();
            $table->string('name',150);
            $table->text('description');
            $table->enum('status', ['Pending', 'In Progress', 'Completed', 'Failed'])->default('Pending');
            $table->date('scheduled_date');
            $table->timestamps();

            $table->foreignId('user_id')
                  ->constrained()
                  ->cascadeOnDelete(); // Deletes products when the category is deleted

         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testings');
    }
};
