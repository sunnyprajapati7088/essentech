<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('image_alt')->nullable();
            $table->string('cta_text')->default('Book Offer Now');
            $table->string('cta_url')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('discount', 100)->nullable();
            $table->string('applicable_service', 150)->nullable();
            $table->string('applicable_brand', 150)->nullable();
            $table->string('location')->default('Kochi, Kakkanad & Ernakulam');
            $table->enum('status', ['draft', 'scheduled', 'active', 'expired', 'archived'])->default('draft')->index();
            $table->integer('priority')->default(0)->index();
            $table->string('seo_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('canonical_url')->nullable();
            $table->string('focus_keyword')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
