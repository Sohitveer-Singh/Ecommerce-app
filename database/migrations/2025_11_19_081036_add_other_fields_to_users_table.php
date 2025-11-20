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

            $table->string('upi_id')->nullable()->after('profile_picture');
            $table->string('pan_number')->nullable()->after('upi_id');
            $table->string('pan_photo_path')->nullable()->after('pan_number');
            $table->string('aadhar_number')->nullable()->after('pan_photo_path');
            $table->string('aadhar_photo_path')->nullable()->after('aadhar_number');
            $table->string('father_name')->nullable()->after('aadhar_photo_path');
            $table->string('upi_qr_path')->nullable()->after('father_name');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'upi_id',
                'pan_number',
                'pan_photo_path',
                'aadhar_number',
                'aadhar_photo_path',
                'father_name',
                'scanner_picture',
            ]);
        });
    }
};
