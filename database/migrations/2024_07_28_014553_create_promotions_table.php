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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->string('promotions_name');
            $table->text('promotions_description')->nullable();
            $table->boolean('promotions_condition')->default(true);
            $table->double('promotions_price')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('status')->default(true)->nullable();
            $table->string('image_path',255)->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
