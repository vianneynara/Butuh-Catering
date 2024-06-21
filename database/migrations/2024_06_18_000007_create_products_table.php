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
            $table->bigIncrements('product_id');
            $table->unsignedBigInteger('shop_id');
            $table->string('name', 50);
            $table->string('description', 255);
            $table->integer('price');
            $table->unsignedTinyInteger('min_order')->default(1);
            $table->unsignedSmallInteger('max_order')->nullable();
            $table->string('image_url', 255);
            $table->timestamps();

            $table->foreign('shop_id')->references('shop_id')->on('shops')->onDelete('cascade');
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
