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
            ['email' => 'user1@xyz.com'], [
                'name' => 'Mr. User1',
                'email' => 'user1@xyz.com',
                'password' => Hash::make('*123456#'),
                'role_id' => 2,
            ]);

        User::updateOrCreate(
            ['id' => 3], [
                'name' => 'Mr. User2',
                'email' => 'user2@xyz.com',
                'password' => Hash::make('*123456#'),
                'role_id' => 2,
            ]);

        User::updateOrCreate(
            ['id' => 4], [
                'name' => 'Mr. User3',
                'email' => 'user3@xyz.com',
                'password' => Hash::make('*123456#'),
                'role_id' => 2,
            ]);

        User::updateOrCreate(
            ['id' => 5], [
                'name' => 'Mr. User4',
                'email' => 'user4@xyz.com',
                'password' => Hash::make('*123456#'),
                'role_id' => 2,
            ]);

        User::updateOrCreate([
            'name' => 'Mr. User5131',
            'email' => 'user131235@xyz.com',
            'password' => Hash::make('*123456#'),
            'role_id' => 2,
        ]);

        User::updateOrCreate([
            'name' => 'Mr. User5145',
            'email' => 'user52466@xyz.com',
            'password' => Hash::make('*123456#'),
            'role_id' => 2,
        ]);

        User::updateOrCreate([
            'name' => 'Mr. User52342',
            'email' => 'user56867@xyz.com',
            'password' => Hash::make('*123456#'),
            'role_id' => 2,
        ]);

        User::updateOrCreate([
            'name' => 'Mr. User52333',
            'email' => 'user533224@xyz.com',
            'password' => Hash::make('*123456#'),
            'role_id' => 2,
        ]);
        User::updateOrCreate([
            'name' => 'Mr. User58989',
            'email' => 'user578778@xyz.com',
            'password' => Hash::make('*123456#'),
            'role_id' => 2,
        ]);
        User::updateOrCreate([
            'name' => 'Mr. User510765',
            'email' => 'user593456@xyz.com',
            'password' => Hash::make('*123456#'),
            'role_id' => 2,
        ]);
        User::updateOrCreate([
            'name' => 'Mr. User523459876',
            'email' => 'user59654345@xyz.com',
            'password' => Hash::make('*123456#'),
            'role_id' => 2,
        ]);
        User::updateOrCreate([
            'name' => 'Mr. User535667',
            'email' => 'user53865237@xyz.com',
            'password' => Hash::make('*123456#'),
            'role_id' => 2,
        ]);
        User::updateOrCreate([
            'name' => 'Mr. User53568',
            'email' => 'user5235675@xyz.com',
            'password' => Hash::make('*123456#'),
            'role_id' => 2,
        ]);
        User::updateOrCreate([
            'name' => 'Mr. User5467981211',
            'email' => 'user5111000@xyz.com',
            'password' => Hash::make('*123456#'),
            'role_id' => 2,
        ]);
        User::updateOrCreate([
            'name' => 'Mr. User2345',
            'email' => 'user523@xyz.com',
            'password' => Hash::make('*123456#'),
            'role_id' => 2,
        ]);
        User::updateOrCreate([
            'name' => 'Mr. User225',
            'email' => 'user542@xyz.com',
            'password' => Hash::make('*123456#'),
            'role_id' => 2,
        ]);
        User::updateOrCreate([
            'name' => 'Mr. User234',
            'email' => 'user52@xyz.com',
            'password' => Hash::make('*123456#'),
            'role_id' => 2,
        ]);
        User::updateOrCreate([
            'name' => 'Mr. User23',
            'email' => 'user234@xyz.com',
            'password' => Hash::make('*123456#'),
            'role_id' => 2,
        ]);
    }
}
