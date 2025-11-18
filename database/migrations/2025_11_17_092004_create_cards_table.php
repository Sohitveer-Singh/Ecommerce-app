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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('card_number');
            // The user who owns this card
            $table->foreignId('user_id')
                ->constrained('users') // Assumes 'users' table
                ->cascadeOnDelete();

            $table->foreignId('activated_by')
                ->nullable()
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('set null'); // Don't delete the card if the admin is deleted

            $table->boolean('card_status')->default(false);
            $table->date('valid_until');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
