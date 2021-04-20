<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'John Doe',
            'email' => 'admin41@role',
            'password' => bcrypt('admin')
        ]);

        $admin->assignRole('admin');

        $admingudang = User::create([
            'name' => 'Jhony',
            'email' => 'Jhony41@role',
            'password' => bcrypt('admingudang')
        ]);

        $admingudang->assignRole('admingudang');

        $adminsuplier = User::create([
            'name' => 'Bambang',
            'email' => 'bambang41@role',
            'password' => bcrypt('adminsuplier')
        ]);

        $adminsuplier->assignRole('adminsuplier');

        $user = User::create([
            'name' => 'human',
            'email' => 'Human41@role',
            'password' => bcrypt('user')
        ]);

        $user->assignRole('user');
    }
}
