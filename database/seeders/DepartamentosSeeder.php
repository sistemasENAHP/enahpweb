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

           'Departamento'=>'Selecciones...',
            'created_at'=>now(),
            'updated_at'=>now()

           ]);

        DB::table('departamentos')->insert([


         'Departamento'=>'Presupuesto',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([


         'Departamento'=>'Compras',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

          DB::table('departamentos')->insert([


         'Departamento'=>'Tesoreria',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([


         'Departamento'=>'Direccion Administrativa',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([


         'Departamento'=>'Asistente Direccion Administrativa',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);
        DB::table('departamentos')->insert([


         'Departamento'=>'Personal',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);
        DB::table('departamentos')->insert([


         'Departamento'=>'Seguridad',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);
        DB::table('departamentos')->insert([


         'Departamento'=>'Control de Estudio',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([


         'Departamento'=>'Biblioteca',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);
        DB::table('departamentos')->insert([


         'Departamento'=>'Obe(Oficinal de Bienestar Estudiantil)',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([


         'Departamento'=>'Reproducción',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([


         'Departamento'=>'Prensa',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([


         'Departamento'=>'Fundación Roman Cardenas',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);
         DB::table('departamentos')->insert([


         'Departamento'=>'Servicio General PB',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([


         'Departamento'=>'Archivo',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([


         'Departamento'=>'Musica',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);


        DB::table('departamentos')->insert([


            'Departamento'=>'Pegasito',
            'created_at'=>now(),
            'updated_at'=>now()

           ]);

           DB::table('departamentos')->insert([


            'Departamento'=>'Centro de Minado',
            'created_at'=>now(),
            'updated_at'=>now()

           ]);


           DB::table('departamentos')->insert([


            'Departamento'=>'Aula 3',
            'created_at'=>now(),
            'updated_at'=>now()

           ]);

           DB::table('departamentos')->insert([


            'Departamento'=>'Aula 4',
            'created_at'=>now(),
            'updated_at'=>now()

           ]);

           //----------------------------------------Piso P1---------------------------------------------------

        DB::table('departamentos')->insert([


         'Departamento'=>'Servicios Generales P1',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([


         'Departamento'=>'Secretaria de Postgrado',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([


         'Departamento'=>'Audiovisulaes',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([


         'Departamento'=>'Asesoría',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);
        DB::table('departamentos')->insert([


         'Departamento'=>'Coordinación de Ingreso',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([


         'Departamento'=>'Investigación',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);


        DB::table('departamentos')->insert([

         'Departamento'=>'Consultoría Jurídica',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([


         'Departamento'=>'Secretaria Dirección General',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);
        DB::table('departamentos')->insert([


         'Departamento'=>'Dirección General',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);


        //--------------------------------P2YP3--------------------------------------------------

        DB::table('departamentos')->insert([


            'Departamento'=>'Laboratorio',
            'created_at'=>now(),
            'updated_at'=>now()

           ]);


           DB::table('departamentos')->insert([


            'Departamento'=>'Sistemas',
            'created_at'=>now(),
            'updated_at'=>now()

           ]);

           DB::table('departamentos')->insert([


            'Departamento'=>'Bienes Nacionales',
            'created_at'=>now(),
            'updated_at'=>now()

           ]);

        DB::table('departamentos')->insert([


         'Departamento'=>'Coordinacion de Pregrado',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);


        DB::table('departamentos')->insert([


         'Departamento'=>'Coordinación de Asitencia Educativa(CAE)',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

        DB::table('departamentos')->insert([


            'Departamento'=>'CIU',
            'created_at'=>now(),
            'updated_at'=>now()

           ]);

        DB::table('departamentos')->insert([


         'Departamento'=>'Integración y convivencia',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);
        DB::table('departamentos')->insert([


         'Departamento'=>'Protocolo',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);
        DB::table('departamentos')->insert([


         'Departamento'=>'Comedor',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);


        //--------------------------PISO P3---------------------

        DB::table('departamentos')->insert([


         'Departamento'=>'Deporte',
         'created_at'=>now(),
         'updated_at'=>now()

        ]);

    }
}
