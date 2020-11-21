<?php

use Illuminate\Database\Seeder;

class SubjectTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subject = [
            [
                'times' => '10',
                'study_time' => '09.00',
                'count_times' => '2',
                'study_id' => '1',
                ]
    ];

    DB::table('subject_list')->insert($subject);
    }
}
