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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();

//            $table->unsignedBigInteger('user_id');
//            $table->unsignedBigInteger('category_id')->nullable();
//           $table->string('created_by')->nullable();

            $table->tinyInteger('listing_step')->default(0);

            $table->string('name');
            $table->string('contact_person');
            $table->string('mobile');
            $table->string('alt_mobile')->nullable();
            $table->string('whatsapp_no')->nullable();
            $table->string('email')->nullable();

            $table->text('description')->nullable();
            $table->string('thumbnail')->nullable();

            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('is_featured')->default(0)->index();
            // $table->tinyInteger('is_active')->default(0)->index();
            // $table->tinyInteger('is_approved')->default(0)->index();
            // $table->date('expiry_date')->nullable()->index();
            // $table->tinyInteger('auto_renew')->default(0);
            // $table->tinyInteger('never_expire')->default(0);

            // $table->string('website')->nullable();
            // $table->string('instagram')->nullable();
            // $table->string('facebook')->nullable();
            // $table->string('twitter')->nullable();

            $table->string('gst_number', 15)->nullable();
            // $table->string('images', 150)->nullable();

            $table->timestamps();

            // Foreign Keys
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            //$table->foreign('category_id')->references('id')->on('listing_categories')->nullOnDelete();
            $table->foreignId('category_id')->nullable()->constrained('listing_categories')->nullOnDelete();


            //$table->foreign('created_by')->references('username')->on('users')->nullOnDelete();
            $table->foreignId('created_by_user_id')
                ->nullable()
                ->constrained('users') // Still references 'id' on 'users'
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
