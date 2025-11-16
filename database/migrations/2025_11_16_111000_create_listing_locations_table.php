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
        Schema::create('listing_locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('listing_id')->index();

            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);

            $table->string('address', 191);
            $table->string('pincode', 6)->index();
            $table->string('city', 191);
            $table->string('state', 191);

            // Foreign Key → listings.id
            $table->foreign('listing_id')
                ->references('id')->on('listings')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listing_locations');
    }
};
