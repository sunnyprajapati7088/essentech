<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('image_alt')->nullable()->after('featured_image');
            $table->string('category', 100)->nullable()->default('general')->after('image_alt');
            $table->string('tags')->nullable()->after('category');
            $table->string('author_name', 150)->nullable()->default('EssenTechs Technical Team')->after('tags');
            $table->string('focus_keyword')->nullable()->after('meta_description');
            $table->text('secondary_keywords')->nullable()->after('focus_keyword');
            $table->string('canonical_url')->nullable()->after('secondary_keywords');
            $table->string('og_title')->nullable()->after('canonical_url');
            $table->text('og_description')->nullable()->after('og_title');
            $table->string('og_image')->nullable()->after('og_description');
            $table->string('schema_type', 50)->default('Article')->after('og_image');
            $table->boolean('is_featured')->default(false)->after('schema_type');
        });
    }

    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn([
                'image_alt',
                'category',
                'tags',
                'author_name',
                'focus_keyword',
                'secondary_keywords',
                'canonical_url',
                'og_title',
                'og_description',
                'og_image',
                'schema_type',
                'is_featured',
            ]);
        });
    }
};
