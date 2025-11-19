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
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->decimal('pin_wallet', 15, 2)->default(0);
            $table->decimal('main_wallet', 15, 2)->default(0);
            $table->decimal('level_income', 15, 2)->default(0);
            $table->decimal('direct_income', 15, 2)->default(0);

            $table->softDeletes();

            $table->timestamps();

            // Indexing for speed if you have millions of rows
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};
