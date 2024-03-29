<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'User';
        $user->lastname = 'LastName';
        $user->email = 'user@example.com';
        $user->is_employee = false;
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);
        
        $user = new User();
        $user->name = 'Admin';
        $user->lastname = 'LastName';
        $user->email = 'admin@example.com';
        $user->is_employee = true;
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
