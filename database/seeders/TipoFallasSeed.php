<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class tipofallasSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_fallas')->insert([

            'Tipo_Falla'=>'Selecciones...',
             'created_at'=>now(),
             'updated_at'=>now()
 
            ]);

        DB::table('tipo_fallas')->insert([

            'Tipo_Falla'=>'No Enciende',
            'created_at'=>now(),
            'updated_at'=>now()
     
                ]);

        DB::table('tipo_fallas')->insert([

             'Tipo_Falla'=>'Se Reinicia Continuamente',
             'created_at'=>now(),
             'updated_at'=>now()
         
                    ]);

        DB::table('tipo_fallas')->insert([

          'Tipo_Falla'=>'El Mouse  No Funcionan',
           'created_at'=>now(),
            'updated_at'=>now()
             
         ]);              

        DB::table('tipo_fallas')->insert([

              'Tipo_Falla'=>'El Teclado no Funciona',
               'created_at'=>now(),
               'updated_at'=>now()                   
                 
         ]); 
         
         
         DB::table('tipo_fallas')->insert([

            'Tipo_Falla'=>'La Pantalla no Funciona',
             'created_at'=>now(),
             'updated_at'=>now()                   
               
       ]);

       DB::table('tipo_fallas')->insert([

        'Tipo_Falla'=>'La Computadora esta Lenta',
         'created_at'=>now(),
         'updated_at'=>now()                   
           
   ]);

   DB::table('tipo_fallas')->insert([

    'Tipo_Falla'=>'Virus',
     'created_at'=>now(),
     'updated_at'=>now()                   
       
   ]);

   DB::table('tipo_fallas')->insert([

    'Tipo_Falla'=>'Perdida de Informacion',
     'created_at'=>now(),
     'updated_at'=>now()                   
       
]);

DB::table('tipo_fallas')->insert([

    'Tipo_Falla'=>'Problema con la Ram',
     'created_at'=>now(),
     'updated_at'=>now()                   
       
]);

DB::table('tipo_fallas')->insert([

    'Tipo_Falla'=>'Problema con el Disco Duro',
     'created_at'=>now(),
     'updated_at'=>now()                   
       
]);

DB::table('tipo_fallas')->insert([

    'Tipo_Falla'=>'Problema con Excel, World, Powerpoint',
     'created_at'=>now(),
     'updated_at'=>now()                   
       
]);


DB::table('tipo_fallas')->insert([

    'Tipo_Falla'=>'Problema con la Impresora',
     'created_at'=>now(),
     'updated_at'=>now()                   
       
]);

DB::table('tipo_fallas')->insert([

    'Tipo_Falla'=>'Problema con el internet',
     'created_at'=>now(),
     'updated_at'=>now()                   
       
]);

DB::table('tipo_fallas')->insert([

    'Tipo_Falla'=>'problema con el VGA/HDMI',
     'created_at'=>now(),
     'updated_at'=>now()                   
       
]);

DB::table('tipo_fallas')->insert([

    'Tipo_Falla'=>'Problema con la fuente de Poder',
     'created_at'=>now(),
     'updated_at'=>now()                   
       
]);

DB::table('tipo_fallas')->insert([

    'Tipo_Falla'=>'Problema de tarjeta de video',
     'created_at'=>now(),
     'updated_at'=>now()                   
       
]);


DB::table('tipo_fallas')->insert([

    'Tipo_Falla'=>'Problema de tarjeta de red',
     'created_at'=>now(),
     'updated_at'=>now()                   
       
]);


DB::table('tipo_fallas')->insert([

    'Tipo_Falla'=>'Problema de  telefono institucional',
     'created_at'=>now(),
     'updated_at'=>now()                   
       
]);

DB::table('tipo_fallas')->insert([

    'Tipo_Falla'=>'Problema con el (SIGA SIG RCP)',
     'created_at'=>now(),
     'updated_at'=>now()                   
       
]);

DB::table('tipo_fallas')->insert([

    'Tipo_Falla'=>'Problema con Route wifi',
     'created_at'=>now(),
     'updated_at'=>now()                   
       
]);

DB::table('tipo_fallas')->insert([

    'Tipo_Falla'=>'Otros..',
     'created_at'=>now(),
     'updated_at'=>now()                   
       
]);







    }
}
