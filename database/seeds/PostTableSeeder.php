<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // cara yang pertama
        DB::table('posts')->insert([
            'title' => 'content db',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elitloremque.'
        ]);

        // cara yang kedua

        $post = [
            ['title' => 'content vue', 'content' => 'lorea'],
            ['title' => 'content react', 'content' => 'lorea'],
        ];

        DB::table('posts')->insert($post);
    }
}
