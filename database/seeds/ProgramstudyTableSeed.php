<?php

use Illuminate\Database\Seeder;

class ProgramstudyTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $program = [
            [
                'name_program_study' => 'Tataboga',
                'desc_program_study' => 'Memasak'
                ]
    ];
    DB::table('program_study')->insert($program);
    }
}
