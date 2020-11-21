<?php

use Illuminate\Database\Seeder;

class KtpTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ktp = [
            [
                'teacher_id' => 1,
                'nomor_ktp' => '1231212'
            ]
    ];
    DB::table('ktp')->insert($ktp);
    }
}
