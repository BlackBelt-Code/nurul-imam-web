<?php

use Illuminate\Database\Seeder;

class StatusStudentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['status_student_name' => 'Reguler'],
            ['status_student_name' => 'inklusi'],
            ['status_student_name' => 'Beasiswa'],
    ];
    DB::table('status_student')->insert($status);
    }
}
