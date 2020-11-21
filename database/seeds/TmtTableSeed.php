<?php

use Illuminate\Database\Seeder;

class TmtTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmt = [
            [
                'teacher_id' => '1',
                'no_tmt' => '12323212'
            ]
    ];
    DB::table('tmt')->insert($tmt);
    }
}
