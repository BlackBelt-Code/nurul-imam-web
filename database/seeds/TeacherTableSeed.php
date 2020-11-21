<?php

use Illuminate\Database\Seeder;

class TeacherTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = [
            [
                'first_name' => 'Ruri',
                'last_name' => 'Susanti',
                'full_name' => 'Ruri Susanti',
                'date_of_birth' => '2020-10-01',
                'address' => 'lorem',
                'programstudy_id' => 1
            ]
    ];
    DB::table('teachers')->insert($teachers);
    }
}
