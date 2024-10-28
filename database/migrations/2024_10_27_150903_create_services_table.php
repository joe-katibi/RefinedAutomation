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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('slogan');
            $table->string('description');
            $table->integer('status')->default(0);
            $table->string('created_by');
            $table->string('edited_by');
            $table->timestamps();
        });

        Schema::create('services_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('services_id');
            $table->string('name');
            $table->string('description');
            $table->string('image');
            $table->integer('status')->default(0);
            $table->string('created_by');
            $table->string('edited_by');
            $table->timestamps();
        });

        Schema::create('services_list_more', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('services_list_id');
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
        Schema::dropIfExists('services_list_more');
        Schema::dropIfExists('services_list');
        Schema::dropIfExists('services');
    }
};
