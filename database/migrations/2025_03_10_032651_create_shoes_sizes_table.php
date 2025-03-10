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
        Schema::create('shoes_sizes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shoes_id')->nullable()->references('id')->on('shoes')->cascadeOnDelete();
            $table->string('size')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shoes_sizes');
    }
};
