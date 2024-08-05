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
        // Schema::create('listadoips', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('Escuela');
        //     $table->string('Ministerio');
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
        // Schema::dropIfExists('listadoips');
    }
};
