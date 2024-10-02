<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->truncateTables([
            'roles',
            'Departamentos',
            'user',
            'TipoFallas',
             'pisos',
            'Listadoips',
            'listado_puntos',
            'estatus',



        ]);
         $this->call([PisosSeeder::class]);
        $this->call([DepartamentosSeeder::class]);
        $this->call([RolesTableSeeder::class]);
        $this->call([UsersSeeder::class]);
        $this->call([TipoFallasSeed::class]);
       
        // $this->call([ListadoPuntosSeeder::class]);
        // $this->call([ListadoipSeed::class]);
        $this->call([EstatusSeeder::class]);



    }

    public function truncateTables(array $tables)
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        // foreach ($tables as $table) {
        //     DB::table($table)->truncate();
        // }
        //DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
