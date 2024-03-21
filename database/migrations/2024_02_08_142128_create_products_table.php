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
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->text('description');
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->foreignId('marca_id')->references('id')->on('marcas');
            $table->integer('stock');
            $table->decimal('discount', 5, 2)->default(0.00);
            $table->foreignId('image_id')->references('id')->on('images')->nullable();
            $table->boolean('product_of_month')->default(false);
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
