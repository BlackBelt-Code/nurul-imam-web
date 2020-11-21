<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin Role
        // $adminRole = new Role();
        // $adminRole->name = 'admin';
        // $adminRole->display_name = 'Admin';
        // $adminRole->save();

        // Member Role
        $memberRole = new Role();
        $memberRole->name = 'member';
        $memberRole->display_name = 'Member';
        $memberRole->save();

        // $admin = new User();
        // $admin->name = 'Admin';
        // $admin->email = 'admin@gmail.com';
        // $admin->password = bcrypt('12345678');
        // $admin->save();
        // $admin->attachRole($adminRole);


        $admin = new User();
        $admin->name = 'Member';
        $admin->email = 'member@gmail.com';
        $admin->password = bcrypt('12345678');
        $admin->save();
        $admin->attachRole($memberRole);
    }
}
