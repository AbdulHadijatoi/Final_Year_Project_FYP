<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
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
            $table->string('category')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('enrollment_key')->nullable();
            $table->tinyInteger('status')->comment('0: Running, 1: Ended')->nullable()->default('1');
            $table->index('tutor_id');
            $table->foreignId('tutor_id')->constrained('tutors')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            // category, title, description, enrollment_key, status, tutor_id
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
}
