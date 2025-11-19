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
        Schema::create('listing_sub_categories', function (Blueprint $table) {
            $table->id();
            // Foreign key linking to the parent table
            // Ensure 'listing_categories' is the exact name of your parent table
            $table->foreignId('listing_category_id')
                ->constrained('listing_categories')
                ->cascadeOnDelete();

            $table->string('name');
            $table->string('slug')->unique();
            $table->string('image')->nullable(); // Optional: in case sub-cats have icons
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listing_sub_categories');
    }
};
