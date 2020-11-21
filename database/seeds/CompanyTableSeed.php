<?php

use Illuminate\Database\Seeder;

class CompanyTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = [
            ['company_name' => 'PT XYZ'],
            ['company_name' => 'PT ABC']
    ];
    DB::table('company')->insert($company);
    }
}