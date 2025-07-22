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
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('template_name', 20)->default('Home Template 1');

            // Banner Information
            $table->string('banner_heading');
            $table->string('banner_image');
            $table->string('banner_image_alt')->nullable();

            //About us information
            $table->string('heading');
            $table->text('description');
            $table->string('image');
            $table->string('image_alt')->nullable();

            //Mission information
            $table->text('mission');
            $table->text('vision');
            $table->text('our_values');

            //Founder information
            $table->string('founder_name');
            $table->string('founder_professional_title');
            $table->text('founder_description');
            $table->string('founder_image');

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
        Schema::dropIfExists('abouts');
    }
};
