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
        Schema::create('contact_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('phone');
            $table->string('email');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('whatsapp');
            $table->string('instagram');
            $table->string('linkedln');
            $table->string('website');
            $table->integer('status')->default(0);
            $table->string('created_by');
            $table->string('edited_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_infos');
    }
};
