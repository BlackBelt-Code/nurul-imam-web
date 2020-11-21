<?php

use Illuminate\Database\Seeder;

class NuptkTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nuptk = [
            [
                'teacher_id' => '1',
                'no_nuptk' => '139283923'
            ]
    ];
    DB::table('nuptk')->insert($nuptk);
    }
}
