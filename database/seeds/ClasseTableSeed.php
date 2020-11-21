<?php

use Illuminate\Database\Seeder;

class ClasseTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clases = [
            ['class_name' => '1 A-B-C-D-E-F'],
            ['class_name' => '2 A-B-C-D-E-F'],
            ['class_name' => '3 A-B-C-D-E-F']
    ];
    DB::table('class')->insert($clases);
    }
}
