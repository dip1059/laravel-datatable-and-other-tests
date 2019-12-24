<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'admin@xyz.com'], [
                'name' => 'Mr. Admin',
                'email' => 'admin@xyz.com',
                'password' => Hash::make('*123456#'),
                'role_id' => 1,
            ]);

        User::updateOrCreate(
            ['email' => 'user43699@xyz.com'], [
            'name' => 'Mr. User1755979',
            'email' => 'user43699@xyz.com',
            'password' => Hash::make('*123456#'),
            'role_id' => 2,
        ]);

        User::updateOrCreate(
            ['email' => 'user4369@xyz.com'], [
            'name' => 'Mr. User175979',
            'email' => 'user4369@xyz.com',
            'password' => Hash::make('*123456#'),
            'role_id' => 2,
        ]);

    }
}
