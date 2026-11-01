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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->longText('content');
            $table->string('thumbnail', 100)->nullable();
            $table->text('image_source_url')->nullable();
            $table->string('image_license', 100)->nullable();
            $table->foreignId('author_id')->constrained(
                table: 'users',
                indexName: 'articles_author_id'
            );
            $table->foreignId('category_id')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
