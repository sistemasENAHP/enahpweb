<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estatus;
use Illuminate\Support\Facades\DB;
class EstatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estatuses')->insert([
            'Estatus' => 'En espera',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('estatuses')->insert([
            'Estatus' => 'Reparando',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('estatuses')->insert([
            'Estatus' => 'Terminado',
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}
