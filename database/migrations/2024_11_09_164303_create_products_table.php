<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.@return void
     */
    
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();  // This creates an auto-incrementing `id` column as the primary key.
            $table->foreignId('category_id');
            $table->string('name_uz');
            $table->string('name_ru');
            $table->text('desciiption_uz');
            $table->text('desciiption_ru');
            $table->string('image');
            $table->double('price', 8, 2);
            $table->string('status');
            $table->timestamps();
            
            // // Optional: Set up a foreign key constraint if category_id references a categories table.
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
