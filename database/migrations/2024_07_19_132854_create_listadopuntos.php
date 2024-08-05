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
        // Schema::create('listado_puntos', function (Blueprint $table) {
        //     $table->id();
        //     $table->String('Puntos');
        //     $table->String('PuertoPatch');
        //      $table->String('NPuertoSwitch');
        //      $table->text('Observacion',200);
        //     $table->timestamps();
        //     $table->engine = 'InnoDB';
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('listado_puntos');
    }
};
