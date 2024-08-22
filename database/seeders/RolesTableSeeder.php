<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $rolAdministrador = Role::create(['name'=>'Administrador']);
        $rolCoordinador = Role::create(['name'=>'Coordinador']);
        $rolTecnico = Role::create(['name'=>'Tecnico']);
        $rolUsuario = Role::create(['name'=>'Usuario']);

        Permission::create(['name'=>'admin.home'])->syncRoles([$rolAdministrador,$rolTecnico,$rolUsuario]);


        Permission::create([ 'name'=>'admin.listado.listadoEquipos.index'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);
        Permission::create([ 'name'=>'admin.listado.listadoEquipos.show'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);
        Permission::create([ 'name'=>'admin.listado.listadoEquipos.destroy'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);


        Permission::create([ 'name'=>'admin.listado.listadoEquipos.PB.createPB'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);
        Permission::create([ 'name'=>'admin.listado.listadoEquipos.PB.editPB'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);
        Permission::create([ 'name'=>'admin.listado.listadoEquipos.PB.formPB'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);
        Permission::create([ 'name'=>'admin.listado.listadoEquipos.P1.createP1'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);
        Permission::create([ 'name'=>'admin.listado.listadoEquipos.P1.editP1'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);
        Permission::create([ 'name'=>'admin.listado.listadoEquipos.P1.formP1'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);
        Permission::create([ 'name'=>'admin.listado.listadoEquipos.P2YP3.createP2YP3'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);
        Permission::create([ 'name'=>'admin.listado.listadoEquipos.P2YP3.editP2YP3'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);

        Permission::create([ 'name'=>'admin.listado.listadoEquipos.P2YP3.formP2YP3'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);






        Permission::create([ 'name'=>'admin.listado.ListadoIp.index'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);
        Permission::create([ 'name'=>'admin.listado.ListadoIp.show'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);
        Permission::create([ 'name'=>'admin.listado.ListadoIp.destroy'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);

        Permission::create([ 'name'=>'admin.listado.ListadoIp.PB.createPB'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);
        Permission::create([ 'name'=>'admin.listado.ListadoIp.PB.editPB'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);

        Permission::create([ 'name'=>'admin.listado.ListadoIp.PB.formPB'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);

        Permission::create([ 'name'=>'admin.listado.ListadoIp.P1.createP1'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);

        Permission::create([ 'name'=>'admin.listado.ListadoIp.P1.editP1'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);

        Permission::create([ 'name'=>'admin.listado.ListadoIp.P1.formP1'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);

        Permission::create([ 'name'=>'admin.listado.ListadoIp.P2YP3.createP2YP3'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);

        Permission::create([ 'name'=>'admin.listado.ListadoIp.P2YP3.editP2YP3'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);

        Permission::create([ 'name'=>'admin.listado.ListadoIp.P2YP3.formP2YP3'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);





      Permission::create([ 'name'=>'admin.listado.ListadoPuntos.index'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);
        Permission::create([ 'name'=>'admin.listado.ListadoPuntos.show'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);
         Permission::create([ 'name'=>'admin.listado.ListadoPuntos.destroy'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);

         Permission::create([ 'name'=>'admin.listado.ListadoPuntos.PB.createPB'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);

        Permission::create([ 'name'=>'admin.listado.ListadoPuntos.PB.editPB'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);

        Permission::create([ 'name'=>'admin.listado.ListadoPuntos.PB.formPB'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);

        Permission::create([ 'name'=>'admin.listado.ListadoPuntos.P1.createP1'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);

        Permission::create([ 'name'=>'admin.listado.ListadoPuntos.P1.editP1'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);

        Permission::create([ 'name'=>'admin.listado.ListadoPuntos.P1.formP1'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);

        Permission::create([ 'name'=>'admin.listado.ListadoPuntos.P2YP3.createP2YP3'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);

        Permission::create([ 'name'=>'admin.listado.ListadoPuntos.P2YP3.editP2YP3'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);

        Permission::create([ 'name'=>'admin.listado.ListadoPuntos.P2YP3.formP2YP3'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);



        Permission::create([ 'name'=>'admin.Planos.index'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);
         Permission::create([ 'name'=>'admin.Planos.destroy'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);

        Permission::create([ 'name'=>'admin.Estatisticas.index'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);
        Permission::create([ 'name'=>'admin.Estatisticas.destroy'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);

        Permission::create([ 'name'=>'admin.soporte.index'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);
         Permission::create([ 'name'=>'admin.soporte.create'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolUsuario]);
         Permission::create([ 'name'=>'admin.soporte.edit'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);
          Permission::create([ 'name'=>'admin.soporte.show'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);
         Permission::create([ 'name'=>'admin.soporte.buscar'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico,$rolUsuario]);
         Permission::create([ 'name'=>'admin.soporte.estatus'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico,$rolUsuario]);
         Permission::create([ 'name'=>'admin.soporte.destroy'])->syncRoles([$rolAdministrador,$rolCoordinador,$rolTecnico]);








        Permission::create([ 'name'=>'admin.users.index'])->syncRoles([$rolAdministrador]);
        Permission::create([ 'name'=>'admin.users.create'])->syncRoles([$rolAdministrador]);
        Permission::create([ 'name'=>'admin.users.edit'])->syncRoles([$rolAdministrador]);
        Permission::create([ 'name'=>'admin.users.show'])->syncRoles([$rolAdministrador]);
        Permission::create([ 'name'=>'admin.users.destroy'])->syncRoles([$rolAdministrador]);
        Permission::create([ 'name'=>'admin.users.form'])->syncRoles([$rolAdministrador]);


    }
}
