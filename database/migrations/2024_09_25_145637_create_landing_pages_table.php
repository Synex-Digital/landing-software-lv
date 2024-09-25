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
        Schema::create('landing_pages', function (Blueprint $table) {
            $table->id();
            $table->string('theme_slug')->default('default');
            $table->string('name');
            $table->string('sku')->unique()->nullable();
            $table->longText('short_description');
            $table->longText('description');
            $table->string('video_link')->nullable();
            $table->decimal('price', 20, 2);
            $table->integer('s_price');
            $table->enum('sp_type',['percentage', 'fixed']);
            $table->boolean('inventory_feature');
            $table->boolean('shipping_fee');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->longText('tags');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_pages');
    }
};
