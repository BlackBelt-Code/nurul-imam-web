<?php

use Illuminate\Database\Seeder;

class CertificateTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $certificate = [
            [
                'teacher_id' => '1',
                'no_certificate' => '1929382391'
            ]
    ];
    DB::table('certificate')->insert($certificate);
    }
}
