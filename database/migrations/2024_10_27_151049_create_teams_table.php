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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('slogan');
            $table->string('description');
            $table->string('name');
            $table->string('avatar')->nullable();
            $table->string('job_title')->nullable();
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('linkedln');
            $table->string('user_status')->default(0);
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
        Schema::dropIfExists('teams');
    }
};
