<?php

use Illuminate\Database\Seeder;

class StatusAccountSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status_account = [
            ['status_name' => 'Super Users', 'status_code' => 'SU'],
            ['status_name' => 'Teachers', 'status_code' => 'TCH'],
            ['status_name' => 'Head Master', 'status_code' => 'HM'],
    ];

    DB::table('status_account')->insert($status_account);
    }
}
