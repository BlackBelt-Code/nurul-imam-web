<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rpp', function (Blueprint $table) {
            $table->id();
            $table->integer('study_id');
            $table->integer('class_id');
            $table->string('semester');
            $table->date('tahun_ajaran');
            $table->string('kompentensi_dasat');
            $table->string('ipk');
            $table->string('tujuan');
            $table->string('materi');
            $table->string('pendekatan');
            $table->string('model');
            $table->string('alat_media');
            $table->string('sumber_belajar');
            $table->string('penilaian');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rpp');
    }
}
