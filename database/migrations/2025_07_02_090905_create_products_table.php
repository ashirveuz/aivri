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
            $table->string('currency', 3)->default('INR');
            $table->string('currency_symbol', 5)->default('₹');
            $table->unsignedInteger('offer_percentage')->nullable()->default(0);
            $table->unsignedInteger('stock')->default(0);
            $table->text('key_features')->nullable();
            $table->text('specifications')->nullable();
            $table->string('color', 50)->nullable();
            $table->string('size', 50)->nullable();
            $table->string('featured_image')->nullable();
            $table->json('additional_images')->nullable();
            $table->string('image_alt')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();

            $table->index('code');
            $table->index('price');
            $table->index('stock');
            $table->index('status');
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
