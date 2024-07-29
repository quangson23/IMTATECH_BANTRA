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
            $table->string('product_name');
            $table->double('regular_price');
            $table->double('discount_price')->nullable();
            $table->unsignedBigInteger('quantity');
            $table->string('short_description')->nullable();
            $table->text('product_description');
            $table->string('sku')->nullable();
            $table->unsignedBigInteger('view')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('product_note')->nullable();
            $table->string('image');
            $table->boolean('tag')->default(true);
            $table->unsignedBigInteger('category_id');
            // Tạo khóa ngoại
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->unsignedBigInteger('promotions_id');
            


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
