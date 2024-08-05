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
        // Schema::create('soportes', function (Blueprint $table) {

        //     $table->id();
        //     $table->foreignId('tipo_falla_id')->constrained('tipo_fallas');
        //     $table->foreignId('usuariosoporte_id')->constrained('usuariosoportes');
        //     $table->integer('NControl');
        //     $table->dateTime('FechaSalida')->nullable()->default(NULL);
        //     $table->text('Motivo_Falla',500)->nullable()->default(NULL);
        //     $table->text('Solucion',500)->nullable()->default(NULL);
        //     $table->String('Tecnico')->nullable()->default(NULL);
        //     $table->timestamps();
        //     $table->engine = 'InnoDB';
        // });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('departamentos');
        // Schema::dropIfExists('tipo_fallas');
        // Schema::dropIfExists('soporte');

    }
};
