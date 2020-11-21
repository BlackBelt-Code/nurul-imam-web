<?php

use Illuminate\Database\Seeder;

class ProgramsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programs = [
            [
                'types_program' => 'lorem',
                'time_programs' => 'lorem',
                'person_charge' => 'lorem',
                'desc_activitie' => 'lorem',
                'evaluation_activitie' => 'lorem',
            ]
    ];

    DB::table('programs')->insert($programs);
    }
}
