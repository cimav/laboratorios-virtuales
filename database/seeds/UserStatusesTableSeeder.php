<?php

use App\UserStatus;
use Illuminate\Database\Seeder;

class UserStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserStatus::create([
            'name' => 'Activo'
        ]);

        UserStatus::create([
            'name' => 'Inactivo'
        ]);

        UserStatus::create([
            'name' => 'Eliminado'
        ]);
    }
}
