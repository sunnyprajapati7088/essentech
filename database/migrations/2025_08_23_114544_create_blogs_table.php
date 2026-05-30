<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Blog; // <-- make sure Blog model exists with constants

return new class extends Migration {
    public function up(): void
    {
        Schema::create(Blog::TABLE, function (Blueprint $table) {
            $table->bigIncrements(Blog::ID);

            // Content
            $table->text(Blog::TITLE);
            $table->text(Blog::SLUG)->unique();
            $table->longText(Blog::SHORT_DESCRIPTION)->nullable();
            $table->longText(Blog::CONTENT)->nullable();
            $table->string(Blog::FEATURED_IMAGE, 255)->nullable();

            // Status & publishing
            $table->enum(Blog::STATUS, ['draft','published','archived'])
                ->default('draft')
                ->index();
            $table->dateTime(Blog::PUBLISHED_AT)->nullable()->index();

            // SEO
            $table->string(Blog::META_TITLE)->nullable();
            $table->longText(Blog::META_DESCRIPTION)->nullable();



            // Misc
            $table->unsignedInteger(Blog::VIEWS_COUNT)->default(0);

            // Audit
            $table->unsignedBigInteger(Blog::CREATED_BY);
            $table->unsignedBigInteger(Blog::UPDATED_BY)->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Compound index
            $table->index([Blog::STATUS, Blog::PUBLISHED_AT]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(Blog::TABLE);
    }
};
