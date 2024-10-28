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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('slogan');
            $table->string('description');
            $table->integer('status')->default(0);
            $table->string('created_by');
            $table->string('edited_by');
            $table->timestamps();
        });

        Schema::create('testimonials_list', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('avatar')->nullable();
            $table->string('profession');
            $table->string('testimony');
            $table->integer('status')->default(0);
            $table->string('created_by');
            $table->string('edited_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials_list');
        Schema::dropIfExists('testimonials');
    }
};
