<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'Admin';
        $user->email='admin@ideaworld.com';
        $user->password=bcrypt('admin123');
        $user->type='admin';
        $user->save();

        $user = new \App\User();
        $user->name = 'Staff';
        $user->email='staff@ideaworld.com';
        $user->password=bcrypt('staff123');
        $user->type='staff';
        $user->save();

    }
}
