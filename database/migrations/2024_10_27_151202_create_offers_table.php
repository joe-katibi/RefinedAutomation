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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('slogan');
            $table->string('description');
            $table->integer('status')->default(0);
            $table->string('created_by');
            $table->string('edited_by');
            $table->timestamps();
        });

        Schema::create('offers_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('offers_id');
            $table->string('header');
            $table->string('image');
            $table->string('title');
            $table->string('description');
            $table->integer('status')->default(0);
            $table->string('created_by');
            $table->string('edited_by');
            $table->timestamps();
        });

        Schema::create('offers_list_more', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('offers_list_id');
            $table->string('header');
            $table->string('image');
            $table->string('title');
            $table->string('description');
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
        Schema::dropIfExists('offers');
    }
};
