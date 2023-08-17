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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('user_name');
            // $table->integer('section_id');
            // $table->integer('category_id');
            // $table->integer('topic_id');
            // $table->string('auth_name');
            // $table->string('special_title');


            $table->string('title');
            $table->string('description');

            // $table->string('time');

            $table->string('image');
            $table->string('thumbnail')->nullable();
            $table->string('meta_description');
            $table->string('meta_title');
            $table->string('meta_keywords');

            // $table->enum('is_featured',['No','Yes']);
            // $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
