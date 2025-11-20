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
        Schema::table('users', function (Blueprint $table) {

            $table->string('address')->nullable()->after('phone');
            $table->string('country')->nullable()->after('address');
            $table->string('city')->nullable()->after('country');
            $table->string('district')->nullable()->after('city');
            $table->string('pincode')->nullable()->after('district');
            $table->string('profile_picture')->nullable()->after('pincode');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'address',
                'country',
                'city',
                'district',
                'pincode',
                'profile_picture',
            ]);
        });
    }
};
