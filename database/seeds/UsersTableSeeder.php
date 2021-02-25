<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::truncate();
        User::create([
            'name' => 'Administrador',
            'first_surname' => 'Administrador',
            'second_surname' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'profile_id' => 1,
            'user_status_id' => 1
        ]);
    }
}
