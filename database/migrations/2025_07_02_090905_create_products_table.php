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
            $table->string('name', 255);
            $table->string('code', 20);
            $table->string('product_code', 20)->unique();
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->unsignedInteger('offer_percentage')->nullable()->default(0);
            $table->unsignedInteger('stock')->default(0);
            $table->text('key_features')->nullable();
            $table->text('specifications')->nullable();
            $table->string('color', 50)->nullable();
            $table->string('size', 50)->nullable();
            $table->string('main_image')->nullable();
            $table->json('gallery_images')->nullable();
            $table->boolean('status')->default(1);
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
