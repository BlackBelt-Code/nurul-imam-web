<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('genre');
            $table->unsignedBigInteger('nisn_id');
            $table->string('schoo_origin');
            $table->string('address');
            $table->unsignedBigInteger('nik_id');
            $table->string('height');
            $table->string('weight');
            $table->string('status_student_id');
            $table->string('note');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('jobs_parents');
            $table->integer('phone');
            $table->timestamps();
            
            $table->foreign('nisn_id')->references('id')->on('nisn_student')->onDelete('cascade');
            
            $table->foreign('nik_id')->references('id')->on('nik_student')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
