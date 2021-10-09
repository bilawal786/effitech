<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fname' => 'Admin',
            'lname' => '',
            'email' => 'admin@gmail.com',
            'role' => '0',
            'phone' => '00000000',
            'address' => 'Guadeloupe',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'fname' => 'Client',
            'lname' => '',
            'email' => 'client@gmail.com',
            'role' => '1',
            'phone' => '00000000',
            'address' => 'Guadeloupe',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'fname' => 'Traitant',
            'lname' => '',
            'email' => 'traitant@gmail.com',
            'role' => '2',
            'phone' => '00000000',
            'address' => 'Guadeloupe',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'fname' => 'Commercial',
            'lname' => '',
            'email' => 'commercial@gmail.com',
            'role' => '3',
            'phone' => '00000000',
            'address' => 'Guadeloupe',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'fname' => 'Conducteur',
            'lname' => '',
            'email' => 'conducteur@gmail.com',
            'role' => '4',
            'phone' => '00000000',
            'address' => 'Guadeloupe',
            'password' => Hash::make('12345678'),
        ]);
    }
}
