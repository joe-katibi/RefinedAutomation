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
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('slogan');
            $table->string('description');
            $table->integer('status')->default(0);
            $table->string('created_by')->nullable();
            $table->string('edited_by')->nullable();
            $table->timestamps();
        });

        Schema::create('faqs_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('faq_id');
            $table->string('image');
            $table->string('title');
            $table->string('sub_title');
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
        Schema::dropIfExists('faqs');
    }
};
