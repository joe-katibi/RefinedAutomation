<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('slogan');
            $table->string('description');
            $table->integer('status')->default(0);
            $table->string('created_by')->nullable();
            $table->string('edited_by')->nullable();
            $table->timestamps();
        });

        Schema::create('blogs_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_id');
            $table->string('image');
            $table->string('name');
            $table->string('description');
            $table->integer('status')->default(0);
            $table->string('created_by')->nullable();
            $table->string('edited_by')->nullable();
            $table->timestamps();

           $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
        });

        Schema::create('blogs_list_more', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blogs_list_id');
            $table->string('title');
            $table->string('sub_title');
            $table->integer('status')->default(0);
            $table->string('created_by')->nullable();
            $table->string('edited_by')->nullable();
            $table->timestamps();

            $table->foreign('blogs_list_id')->references('id')->on('blogs_list')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs_list_more');
        Schema::dropIfExists('blogs_list');
        Schema::dropIfExists('blogs');
    }
};
