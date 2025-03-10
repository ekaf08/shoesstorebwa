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
        Schema::create('product_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shoes_id')->nullable()->references('id')->on('shoes')->cascadeOnDelete();
            $table->foreignId('promo_code_id')->nullable()->references('id')->on('promocodes')->cascadeOnDelete();

            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('booking_trx_id')->nullable();
            $table->string('city')->nullable();
            $table->string('post_code')->nullable();
            $table->string('proof')->nullable();

            $table->unsignedBigInteger('shoes_size')->nullable();

            $table->text('address')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('sub_total_amount')->nullable();
            $table->integer('grand_total_amount')->nullable();
            $table->integer('discount_amount')->nullable();
            $table->boolean('is_paid')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_transactions');
    }
};
