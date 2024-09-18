<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Marca_EquipoSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('marca_equipos')->insert([
            'Marca' => 'Vit'
            'created_at' => now(),
            'updated_at' => now()

        ]);

           DB::table('marca_equipos')->insert([
            'Marca' => 'Siragon'
            'created_at' => now(),
            'updated_at' => now()

        ]);

             DB::table('marca_equipos')->insert([
            'Marca' => 'HP'
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}
