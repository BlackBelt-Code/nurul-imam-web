<?php

use Illuminate\Database\Seeder;
use App\Permission;
class PermissionTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createPost = Permission::create([
        'name' => 'create-user',
        'display_name' => 'Create Users', // optional
        'description' => 'create new blog posts', // optional
        ]);

        $editUser = Permission::create([
        'name' => 'edit-user',
        'display_name' => 'Edit Users', // optional
        'description' => 'edit existing users', // optional
        ]);

        DB::table('permissions')->insert($createPost);
        // DB::table('permissions')->insert($editUser);
    }
}