<?php

use Illuminate\Database\Seeder;

class StudentTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
            [
                'first_name' => 'alian1',
                'last_name' => 'hakim',
                'full_name' => 'alian hakim',
                'email' => 'example1@gmail.com',
                'date_of_birth' => '2020-06-02',
                'address' => 'lorem',
    ],[
                'first_name' => 'alian2',
                'last_name' => 'hakim',
                'full_name' => 'alian hakim',
                'email' => 'example2@gmail.com',
                'date_of_birth' => '2020-06-02',
                'address' => 'lorem',
    ],
    [
                'first_name' => 'alian3',
                'last_name' => 'hakim',
                'full_name' => 'alian hakim',
                'email' => 'example3@gmail.com',
                'date_of_birth' => '2020-06-02',
                'address' => 'lorem',
    ],
    [
                'first_name' => 'alian4',
                'last_name' => 'hakim',
                'full_name' => 'alian hakim',
                'email' => 'example4@gmail.com',
                'date_of_birth' => '2020-06-02',
                'address' => 'lorem',
    ],
    [
                'first_name' => 'alian5',
                'last_name' => 'hakim',
                'full_name' => 'alian hakim',
                'email' => 'example5@gmail.com',
                'date_of_birth' => '2020-06-02',
                'address' => 'lorem',
    ]
            ];

        DB::table('students')->insert($students);
    }
}
