<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pisos;
use Illuminate\Support\Facades\DB;
class PisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pisos')->insert([
            'Pisos' => 'PB',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('pisos')->insert([
            'Pisos' => 'P1',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table('pisos')->insert([
            'Pisos' => 'P2YP3',
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}
