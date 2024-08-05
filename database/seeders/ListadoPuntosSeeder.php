<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ListadoPuntosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('listado_puntos')->insert([
            'departamento_id' => '2',
            'piso_id' => '1',
            'Nombre' => 'Ruperto',
            'Apellido' => 'Gonzalez',
            'Cedula' => '12345678',
            'Equipo' => 'PC',
            'Puntos' => 'PB-01-01',
             'PuertoPatch'=>'3-30',
             'NPuertoSwitch'=>'3',
             'Observacion'=> '',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('listado_puntos')->insert([
            'departamento_id' => '3',
            'piso_id' => '1',
            'Nombre' => '',
            'Apellido' => '',
            'Cedula' => '',
            'Equipo' => '',
            'Puntos' => 'PB-01-02',
            'PuertoPatch'=>'',
             'NPuertoSwitch'=>'',
             'Observacion'=> '',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('listado_puntos')->insert([
            'departamento_id' => '22',
            'piso_id' => '2',
            'Nombre' => '',
            'Apellido' => '',
            'Cedula' => '',
            'Equipo' => '',
            'Puntos' => 'PB-01-03',
            'PuertoPatch'=>'',
             'NPuertoSwitch'=>'',
             'Observacion'=> '',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('listado_puntos')->insert([
            'departamento_id' => '23',
            'piso_id' => '2',
            'Nombre' => '',
            'Apellido' => '',
            'Cedula' => '',
             'Equipo' => '',
            'Puntos' => 'PB-01-04',
            'PuertoPatch'=>'',
             'NPuertoSwitch'=>'',
             'Observacion'=> '',
            'created_at' => now(),
            'updated_at' => now()

        ]);


        DB::table('listado_puntos')->insert([
            'departamento_id' => '32',
            'piso_id' => '3',
            'Nombre' => '',
            'Apellido' => '',
            'Cedula' => '',
             'Equipo' => '',
            'Puntos' => 'PB-01-05',
            'PuertoPatch'=>'',
             'NPuertoSwitch'=>'',
             'Observacion'=> '',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('listado_puntos')->insert([
            'departamento_id' => '33',
            'piso_id' => '3',
            'Nombre' => '',
            'Apellido' => '',
            'Cedula' => '',
            'Equipo' => '',
            'Puntos' => 'PB-01-06',
            'PuertoPatch'=>'',
             'NPuertoSwitch'=>'',
             'Observacion'=> '',
            'created_at' => now(),
            'updated_at' => now()

        ]);


        DB::table('listado_puntos')->insert([
            'departamento_id' => '8',
            'piso_id' => '1',
            'Nombre' => '',
            'Apellido' => '',
            'Cedula' => '',
              'Equipo' => '',
            'Puntos' => 'PB-01-07',
            'PuertoPatch'=>'',
             'NPuertoSwitch'=>'',
             'Observacion'=> '',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('listado_puntos')->insert([
            'departamento_id' => '9',
            'piso_id' => '1',
            'Nombre' => '',
            'Apellido' => '',
            'Cedula' => '',
            'Equipo' => '',
            'Puntos' => 'PB-01-08',
            'PuertoPatch'=>'',
             'NPuertoSwitch'=>'',
             'Observacion'=> '',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('listado_puntos')->insert([
            'departamento_id' => '24',
            'piso_id' => '2',
            'Nombre' => '',
            'Apellido' => '',
            'Cedula' => '',
            'Equipo' => '',
            'Puntos' => 'PB-01-09',
            'PuertoPatch'=>'',
             'NPuertoSwitch'=>'',
             'Observacion'=> '',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('listado_puntos')->insert([
            'departamento_id' => '25',
            'piso_id' => '2',
            'Nombre' => '',
            'Apellido' => '',
            'Cedula' => '',
            'Equipo' => '',
            'Puntos' => 'PB-01-10',
            'PuertoPatch'=>'',
             'NPuertoSwitch'=>'',
             'Observacion'=> '',
            'created_at' => now(),
            'updated_at' => now()

        ]);

         DB::table('listado_puntos')->insert([
            'departamento_id' => '34',
            'piso_id' => '3',
            'Nombre' => '',
            'Apellido' => '',
            'Cedula' => '',
            'Equipo' => '',
            'Puntos' => 'PB-01-10',
            'PuertoPatch'=>'',
             'NPuertoSwitch'=>'',
             'Observacion'=> '',
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}
