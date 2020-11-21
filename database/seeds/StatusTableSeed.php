<?php

use Illuminate\Database\Seeder;

class StatusTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['status_name' => 'Murid'],
            ['status_name' => 'Guru'],
            ['status_name' => 'Super Admin'],
            ['status_name' => 'Kepala Sekolah'],
    ];

    DB::table('status')->insert($status);
    }
}
