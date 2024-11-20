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
            'name' => 'Ivan',
            'surname' => 'Jaspe',
            'identification_card' => 25213024,
            'ip_equipo' => '10.2.2.188',
            'nombre_equipo' => 'sistema-04',
            'telefono' => '0416154545',
            'telefonoI' => '0416154543',
            'email' => 'Jaspe@enahp.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Enahp*2024'),
            'created_at' => now(),
            'updated_at' => now()

        ])->assignRole('Administrador');
     
        //  User::create([
            
        //      'departamento_id' => 32,

        //     'name' => 'Jose ',
        //     'surname' => 'Ramos',
        //     'identification_card' => 12345698,
        //     'ip_equipo' => '10.2.2.184',
        //     'nombre_equipo' => 'sistema-01',
        //     'telefono' => '0416154545',
        //     'telefonoI'=> '0416154541',
        //     'email' => 'Coordinador@enahp.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('Enahp*2024'),
        //     'created_at' => now(),
        //     'updated_at' => now()

        // ])->assignRole('Coordinador');



        //    User::create([
            
        //     'departamento_id' => 32,
        //     'name' => 'Hamilton ',
        //     'surname' => 'Leon',
        //     'identification_card' => 12345678,
        //     'ip_equipo' => '10.2.2.189',
        //     'nombre_equipo' => 'sistema-05',
        //     'telefono' => '0416154545',
        //     'telefonoI' => '0416154548',
        //     'email' => 'hamilton@enahp.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('Enahp*2024'),
        //     'created_at' => now(),
        //     'updated_at' => now()

        // ])->assignRole('Tecnico');


        //    User::create([
            
        //     'departamento_id' => 32,
        //     'name' => 'Anacarilis ',
        //     'surname' => 'Palacio',
        //     'identification_card' => 14154199,
        //     'ip_equipo' => '10.2.2.190',
        //     'nombre_equipo' => 'sistema-',
        //     'telefono' => '0416154545',
        //     'telefonoI' => '0416154548',
        //     'email' => 'Anacarilis@enahp.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('Enahp*2024'),
        //     'created_at' => now(),
        //     'updated_at' => now()

        // ])->assignRole('Usuario');


        //    User::create([
            
        //     'departamento_id' => 32,
        //     'name' => 'Mariangela ',
        //     'surname' => 'Ferro',
        //     'identification_card' => 17453147,
        //     'ip_equipo' => '10.2.2.187',
        //     'nombre_equipo' => 'sistema-',
        //     'telefono' => '0416154545',
        //     'telefonoI' => '0416154548',
        //     'email' => 'Mariangela@enahp.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('Enahp*2024'),
        //     'created_at' => now(),
        //     'updated_at' => now()

        // ])->assignRole('Tecnico');


        //    User::create([
            
        //     'departamento_id' => 32,
        //     'name' => 'Edward ',
        //     'surname' => 'Sanoja',
        //     'identification_card' => 16097203,
        //     'ip_equipo' => '10.2.2.185',
        //     'nombre_equipo' => 'sistema-',
        //     'telefono' => '0416154545',
        //     'telefonoI' => '0416154548',
        //     'email' => 'Edward@enahp.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('Enahp*2024'),
        //     'created_at' => now(),
        //     'updated_at' => now()

        // ])->assignRole('Tecnico');


        //     User::create([
            
        //     'departamento_id' => 32,
        //     'name' => 'Meybis ',
        //     'surname' => 'Rincones',
        //     'identification_card' => 15132410,
        //     'ip_equipo' => '10.2.2.186',
        //     'nombre_equipo' => 'sistema-',
        //     'telefono' => '0416154545',
        //     'telefonoI' => '0416154548',
        //     'email' => 'Meybis@enahp.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('Enahp*2024'),
        //     'created_at' => now(),
        //     'updated_at' => now()

        // ])->assignRole('Tecnico');


        //      User::create([
            
        //     'departamento_id' => 32,
        //     'name' => 'Daylet ',
        //     'surname' => 'Lopez',
        //     'identification_card' => 20302665,
        //     'ip_equipo' => '10.2.2.183',
        //     'nombre_equipo' => 'sistema-',
        //     'telefono' => '0416154545',
        //     'telefonoI' => '0416154548',
        //     'email' => 'Dayleth@enahp.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('Enahp*2024'),
        //     'created_at' => now(),
        //     'updated_at' => now()

        // ])->assignRole('Tecnico');


    }
}
