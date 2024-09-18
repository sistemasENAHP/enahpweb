<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class departamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       //----------------------------------PB---------------

        DB::table('departamentos')->insert([
          'piso_id' => 1,
         'Departamento'=>'Presupuesto',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([
          'piso_id' => 1,
         'Departamento'=>'Compras',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

          DB::table('departamentos')->insert([
         'piso_id' => 1,
         'Departamento'=>'Tesoreria',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([
          'piso_id' => 1,
         'Departamento'=>'Direccion Administrativa',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([
          'piso_id' => 1,
         'Departamento'=>'Asistente Direccion Administrativa',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);
        DB::table('departamentos')->insert([
            'piso_id' => '1',
         'Departamento'=>'Personal',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);
        DB::table('departamentos')->insert([
           'piso_id' => 1,
         'Departamento'=>'Seguridad',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);
        DB::table('departamentos')->insert([
          'piso_id' => 1,
         'Departamento'=>'Control de Estudio',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([
           'piso_id' => 1,
         'Departamento'=>'Biblioteca',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);
        DB::table('departamentos')->insert([
         'piso_id' => '1',
         'Departamento'=>'Obe(Oficinal de Bienestar Estudiantil)',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([
            'piso_id' => 1,
         'Departamento'=>'Reproducción',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([
           'piso_id' => 1,
         'Departamento'=>'Prensa',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([
           'piso_id' => 1,
         'Departamento'=>'Fundación Roman Cardenas',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);
         DB::table('departamentos')->insert([
           'piso_id' => 1,
         'Departamento'=>'Servicio General PB',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([
           'piso_id' => 1,
         'Departamento'=>'Archivo',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([
         'piso_id' => 1,
         'Departamento'=>'Musica',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);


        DB::table('departamentos')->insert([
             'piso_id' => 1,
            'Departamento'=>'Pegasito',
            'created_at'=>now(),
            'updated_at'=>now()

           ]);

           DB::table('departamentos')->insert([
             'piso_id' => 1,
            'Departamento'=>'Centro de Minado',
            'created_at'=>now(),
            'updated_at'=>now()

           ]);


           DB::table('departamentos')->insert([
             'piso_id' => 1,
            'Departamento'=>'Aula 3',
            'created_at'=>now(),
            'updated_at'=>now()

           ]);

           DB::table('departamentos')->insert([
              'piso_id' => 1,
            'Departamento'=>'Aula 4',
            'created_at'=>now(),
            'updated_at'=>now()

           ]);

           //----------------------------------------Piso P1---------------------------------------------------

        DB::table('departamentos')->insert([
          'piso_id' => 2,
         'Departamento'=>'Servicios Generales P1',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([
         'piso_id' => 2,
         'Departamento'=>'Secretaria de Postgrado',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([
          'piso_id' => 2,
         'Departamento'=>'Audiovisulaes',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([
          'piso_id' => 2,
         'Departamento'=>'Asesoría',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);
        DB::table('departamentos')->insert([
          'piso_id' => 2,
         'Departamento'=>'Coordinación de Ingreso',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([
          'piso_id' => 2,
         'Departamento'=>'Investigación',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        
        DB::table('departamentos')->insert([
         'piso_id' => 2,
         'Departamento'=>'Consultoría Jurídica',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([
         'piso_id' => 2,
         'Departamento'=>'Secretaria Dirección General',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);
        DB::table('departamentos')->insert([
          'piso_id' => 2,
         'Departamento'=>'Dirección General',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);


        //--------------------------------P2YP3--------------------------------------------------

        DB::table('departamentos')->insert([
            'piso_id' => 3,
            'Departamento'=>'Laboratorio',
            'created_at'=>now(),
            'updated_at'=>now()

           ]);


           DB::table('departamentos')->insert([
             'piso_id' => 3,
            'Departamento'=>'Sistemas',
            'created_at'=>now(),
            'updated_at'=>now()

           ]);

           DB::table('departamentos')->insert([
             'piso_id' => 3,
            'Departamento'=>'Bienes Nacionales',
            'created_at'=>now(),
            'updated_at'=>now()

           ]);

        DB::table('departamentos')->insert([
         'piso_id' => 3,
         'Departamento'=>'Coordinacion de Pregrado',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);


        DB::table('departamentos')->insert([
           'piso_id' => 3,
         'Departamento'=>'Coordinación de Asitencia Educativa(CAE)',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([
           'piso_id' => 3,
            'Departamento'=>'CIU',
            'created_at'=>now(),
            'updated_at'=>now()

           ]);

        DB::table('departamentos')->insert([
          'piso_id' => 3,
         'Departamento'=>'Integración y convivencia',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);
        DB::table('departamentos')->insert([
        'piso_id' => 3,
         'Departamento'=>'Protocolo',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);
        DB::table('departamentos')->insert([
         'piso_id' => 3,
         'Departamento'=>'Comedor',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);


        //--------------------------PISO P3---------------------

        DB::table('departamentos')->insert([
         'piso_id' => 4,
         'Departamento'=>'Deporte',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

    }
}
