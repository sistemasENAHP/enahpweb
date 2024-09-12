<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('departamentos', function (Blueprint $table) {
            $table->id();
            $table->string('Departamento');
            $table->timestamps();
            $table->engine='InnoDB';

        });


             Schema::create('pisos', function (Blueprint $table) {
            $table->id();
            $table->string('Pisos');
            $table->timestamps();
            $table->engine = 'InnoDB';

        });


        Schema::create('estatuses', function (Blueprint $table) {
            $table->id();
            $table->string('Estatus');
            $table->timestamps();
            $table->engine = 'InnoDB';

        });


        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('piso_id')->constrained('pisos');
            $table->foreignId('departamento_id')->constrained('departamentos');
            $table->string('Nombre');
            $table->string('Apellidos');
            $table->integer('Cedula');
            $table->string('Equipo');
            $table->string('Marca');
            $table->string('Nombre_Equipo');
            $table->integer('Cantidad_Equipo');
            $table->string('Sistema_Operativo');
            $table->string('bits');
            $table->string('Version');
            $table->string('ip_escuela')->nullable()->default(NULL);
            $table->string('ip_ministerio')->nullable()->default(NULL);
            $table->string('MacAdress');
            $table->string('Mouse')->nullable()->default(NULL);
            $table->string('Teclado')->nullable()->default(NULL);
            $table->string('Corneta')->nullable()->default(NULL);
            $table->string('Regulador')->nullable()->default(NULL);
            $table->string('DiscoDuroGB');
            $table->string('MemoriaRam');
            $table->string('CableCorriente')->nullable()->default(NULL);
            $table->string('CableVGAHDMI')->nullable()->default(NULL);
            $table->string('Impresora')->nullable()->default(NULL);
            $table->string('Telefono')->nullable()->default(NULL);
            $table->string('Route')->nullable()->default(NULL);
            $table->string('Dns')->nullable()->default(NULL);
            $table->string('Puerto')->nullable()->default(NULL);
            $table->string('Proxy')->nullable()->default(NULL);
            $table->string('PuntoRed');
            $table->string('CajetinPuntos');
            $table->text('Observacion',200);
            $table->text('CasoEspeciales',200);
            $table->timestamps();
            $table->engine = 'innoDB';
        });


          Schema::create('tipo_fallas', function (Blueprint $table) {
            $table->id();
            $table->string('Tipo_Falla');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('soportes', function (Blueprint $table) {

            $table->id();
            $table->foreignId('estatus_id')->constrained('estatuses');
            $table->foreignId('tipo_falla_id')->constrained('tipo_fallas');
            $table->foreignId('departamento_id')->constrained('departamentos');
            $table->string('NControl');
            // $table->string('NTecnico');
            $table->string('Nombre');
            $table->string('Apellidos');
            $table->integer('Cedula');
            $table->string('Telefono');
            $table->string('Correo');
            $table->string('ip_equipo');
            $table->dateTime('FechaEntrada')->nullable()->default(NULL);
            $table->dateTime('FechaSalida')->nullable()->default(NULL);
            $table->text('Motivo_Falla',500)->nullable()->default(NULL);
            $table->text('Solucion',500)->nullable()->default(NULL);
            $table->string('Tecnico')->nullable()->default(NULL);
            $table->timestamps();
            $table->engine = 'InnoDB';
        });


        Schema::create('listado_puntos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('piso_id')->constrained('pisos');
            $table->foreignId('departamento_id')->constrained('departamentos');
            $table->string('Nombre')->nullable()->default(NULL);
            $table->string('Apellido')->nullable()->default(NULL);
            $table->string('Cedula')->nullable()->default(NULL);
            $table->string('Equipo')->nullable()->default(NULL);
            $table->string('Puntos')->nullable()->default(NULL);;
            $table->string('PuertoPatch')->nullable()->default(NULL);;
             $table->string('NPuertoSwitch')->nullable()->default(NULL);;
             $table->text('Observacion',200)->nullable()->default(NULL);;
            $table->timestamps();
            $table->engine = 'InnoDB';

        });

           Schema::create('listadoips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('piso_id')->constrained('pisos');
            $table->foreignId('departamento_id')->constrained('departamentos');
            $table->string('Nombre')->nullable()->default(NULL);
            $table->string('Apellido')->nullable()->default(NULL);
            $table->string('Cedula')->nullable()->default(NULL);
            $table->string('Equipo')->nullable()->default(NULL);
            $table->string('Escuela')->nullable()->default(NULL);;
            $table->string('Ministerio')->nullable()->default(NULL);;
             $table->text('Observacion',200)->nullable()->default(NULL);;
            $table->timestamps();
            $table->engine = 'InnoDB';

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listado_puntos');
        Schema::dropIfExists('listadoips');
        Schema::dropIfExists('pisos');
        Schema::dropIfExists('equipos');
        Schema::dropIfExists('departamentos');
        Schema::dropIfExists('soportes');
        Schema::dropIfExists('tipo_fallas');
        Schema::dropIfExists('usuariosoportes');

    }
};
