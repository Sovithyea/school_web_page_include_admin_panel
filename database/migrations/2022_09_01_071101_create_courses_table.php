<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->decimal('price');
            $table->string('duration');
            $table->string('skill_level');
            $table->string('start_class');
            $table->text('description')->nullable();
            $table->integer('admin_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->foreignId('course_type_id');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('course_type_id')->references('id')->on('course_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
