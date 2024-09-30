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
             'departamento_id' => 31,
            'name' => 'Administrador',
            'surname' => 'Administrador',
            'identification_card' => 25213024,
            'ip_equipo' => '10.2.2.186',
            'nombre_equipo' => 'sistema-00',
            'telefono' => '0416154545',
            'telefonoI'=> '0416154541',
            'email' => 'Administrador@enahp.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Enahp*2024'),
            'created_at' => now(),
            'updated_at' => now()

        ])->assignRole('Administrador');

         User::create([
             'departamento_id' => 31,
            'name' => 'Ivan',
            'surname' => 'Jaspe',
            'identification_card' => 25213025,
            'ip_equipo' => '10.2.2.188',
            'nombre_equipo' => 'sistema-04',
            'telefono' => '0416154545',
            'telefonoI' => '0416154543',
            'email' => 'Jaspe@enahp.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Enahp*2024'),
            'created_at' => now(),
            'updated_at' => now()

        ])->assignRole('Tecnico');

           User::create([
            'departamento_id' => 31,
            'name' => 'Hamilton ',
            'surname' => 'Leon',
            'identification_card' => 12345678,
            'ip_equipo' => '10.2.2.187',
            'nombre_equipo' => 'sistema-05',
            'telefono' => '0416154545',
            'telefonoI' => '0416154548',
            'email' => 'hamilton@enahp.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Enahp*2024'),
            'created_at' => now(),
            'updated_at' => now()

        ])->assignRole('Usuario');

    }
}
