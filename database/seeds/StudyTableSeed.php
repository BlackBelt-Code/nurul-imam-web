<?php

use Illuminate\Database\Seeder;

class StudyTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $study = [
            ['study_name' => 'Tataboga', 'study_desc' => 'Jurusan Memasak Seperti Chef'],
            ['study_name' => 'Teknik', 'study_desc' => 'Jurusan Teknik Segala Teknik'],
    ];

    DB::table('study')->insert($study);
    }
}
