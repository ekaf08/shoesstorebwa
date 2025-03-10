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
        Schema::create('shoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('brand_id')->nullable()->references('id')->on('brands')->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->string('thumbnail')->nullable();
            $table->text('about')->nullable();
            $table->unsignedBigInteger('price')->nullable();
            $table->unsignedBigInteger('stock')->nullable();
            $table->boolean('is_popular')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shoes');
    }
};
