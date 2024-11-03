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
            $table->text('description');
            $table->integer('status')->default(0);
            $table->string('created_by')->nullable();
            $table->string('edited_by')->nullable();
            $table->timestamps();
        });

        Schema::create('services_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('services_id')->nullable();
            $table->string('name');
            $table->text('description');
            $table->string('image')->nullable();
            $table->integer('status')->default(0);
            $table->string('created_by')->nullable();
            $table->string('edited_by')->nullable();
            $table->timestamps();
        });

        Schema::create('services_list_more', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('services_list_id');
            $table->string('title');
            $table->text('sub_title');
            $table->integer('status')->default(0);
            $table->string('created_by')->nullable();
            $table->string('edited_by')->nullable();
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
