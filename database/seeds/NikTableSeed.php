<?php

use Illuminate\Database\Seeder;

class NikTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nik = [
            [
                'teacher_id' => '1',
                'nik' => '11001'

            ]
    ];

    DB::table('nik')->insert($nik);
    }
}
