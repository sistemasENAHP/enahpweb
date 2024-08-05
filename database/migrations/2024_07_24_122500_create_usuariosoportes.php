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
        // Schema::create('usuariosoportes', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('equipo_id')->constrained('equipos');
        //     $table->foreignId('departamento_id')->constrained('departamentos');
        //     $table->string('Nombre');
        //     $table->string('Apellidos');
        //     $table->integer('Cedula');
        //     $table->string('Telefono');
        //     $table->string('Correo');
        //     $table->dateTime('FechaEntrada');
        //     $table->timestamps();
        //     $table->engine = 'innoDB';
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('usuariosoportes');
    }
};
