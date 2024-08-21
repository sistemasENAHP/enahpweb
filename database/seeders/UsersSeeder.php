<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use  App\Models\User;

class UsersSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

            'name' => 'Administrador',
            'surname' => 'Administrador',
            'identification_card' => 123456,
            'user' => 'Administrador',
            'email' => 'Administrador@enahp.com',
            'email_verified_at' => now(),
            'password' => Hash::make('enahp*2024'),
            'created_at' => now(),
            'updated_at' => now()

        ])->assignRole('Administrador');

         User::create([

            'name' => 'Ivan',
            'surname' => 'Jaspe',
            'identification_card' => 123456,
            'user' => 'Jaspe',
            'email' => 'Jaspe@enahp.com',
            'email_verified_at' => now(),
            'password' => Hash::make('enahp*2024'),
            'created_at' => now(),
            'updated_at' => now()

        ])->assignRole('Tecnico');

           User::create([

            'name' => 'Hamilton ',
            'surname' => 'Leon',
            'identification_card' => 123456,
            'user' => 'Hamilton ',
            'email' => 'hamilton@enahp.com',
            'email_verified_at' => now(),
            'password' => Hash::make('enahp*2024'),
            'created_at' => now(),
            'updated_at' => now()

        ])->assignRole('Tecnico');

    }
}
