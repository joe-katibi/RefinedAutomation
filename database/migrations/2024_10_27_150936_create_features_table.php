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
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('slogan');
            $table->string('description');
            $table->integer('status')->default(0);
            $table->string('created_by');
            $table->string('edited_by');
            $table->timestamps();
        });

        Schema::create('features_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('features_id');
            $table->string('image');
            $table->string('name');
            $table->string('description');
            $table->integer('status')->default(0);
            $table->string('created_by');
            $table->string('edited_by');
            $table->timestamps();
        });

        Schema::create('features_list_more', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('features_list_id');
            $table->string('image');
            $table->string('title');
            $table->string('sub_title');
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
        Schema::dropIfExists('features_list_more');
        Schema::dropIfExists('features_list');
        Schema::dropIfExists('features');
    }
};
