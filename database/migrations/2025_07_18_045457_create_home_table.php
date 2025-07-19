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
        Schema::create('home', function (Blueprint $table) {
            $table->id();
            $table->string('template_name', 20)->default('Home Template 1');

            // Banner Information
            $table->string('banner_title');
            $table->text('banner_description')->nullable();
            $table->json('banner_images')->nullable();
            $table->string('image_alt')->nullable();

            // SEO Information
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();

            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home');
    }
};
