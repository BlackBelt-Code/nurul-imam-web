<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsExcellentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_excellent', function (Blueprint $table) {
            $table->id();
            $table->dateTime('event_time', 0);
            $table->string('person_charge');
            $table->text('desc_event');
            $table->string('evaluation_event');
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
        Schema::dropIfExists('program_excellent');
    }
}