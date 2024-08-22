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
             'departamento_id' => 32, 
            'name' => 'Administrador',
            'surname' => 'Administrador',
            'identification_card' => 123456,
            'user' => 'Administrador',
            'ip_equipo' => '10.2.2.186',
            'telefono' => '0416154545',
            'email' => 'Administrador@enahp.com',
            'email_verified_at' => now(),
            'password' => Hash::make('enahp*2024'),
            'created_at' => now(),
            'updated_at' => now()

        ])->assignRole('Administrador');

         User::create([
             'departamento_id' => 32, 
            'name' => 'Ivan',
            'surname' => 'Jaspe',
            'identification_card' => 123456,
            'user' => 'Jaspe',
            'ip_equipo' => '10.2.2.188',
            'telefono' => '0416154545',
            'email' => 'Jaspe@enahp.com',
            'email_verified_at' => now(),
            'password' => Hash::make('enahp*2024'),
            'created_at' => now(),
            'updated_at' => now()

        ])->assignRole('Tecnico');

           User::create([
            'departamento_id' => 32, 
            'name' => 'Hamilton ',
            'surname' => 'Leon',
            'identification_card' => 123456,
            'user' => 'Hamilton ',
            'ip_equipo' => '10.2.2.187',
            'telefono' => '0416154545',
            'email' => 'hamilton@enahp.com',
            'email_verified_at' => now(),
            'password' => Hash::make('enahp*2024'),
            'created_at' => now(),
            'updated_at' => now()

        ])->assignRole('Usuario');

    }
}
