<?php

use Illuminate\Database\Seeder;

class EducationTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $education = [
            [
                'teacher_id'=>'1',
                'education_name' => 'Universitas Indonesia'
            ]
    ];
    DB::table('education')->insert($education);
    }
}
