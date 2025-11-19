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
        Schema::create('listing_listing_sub_category', function (Blueprint $table) {
            // The Listing
            $table->foreignId('listing_id')->constrained('listings')->cascadeOnDelete();

            // The Sub Category
            $table->foreignId('listing_sub_category_id')->constrained('listing_sub_categories')->cascadeOnDelete();

            $table->primary(['listing_id', 'listing_sub_category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listing_sub_category');
    }
};
