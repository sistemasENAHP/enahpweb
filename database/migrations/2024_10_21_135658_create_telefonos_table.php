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
        Schema::create('telefonos', function (Blueprint $table) {
            $table->id();
             $table->foreignId('piso_id')->constrained('pisos');
            $table->foreignId('departamento_id')->constrained('departamentos');
            $table->foreignId('user_id')->constrained('users')->nullable()->default(NULL);
            $table->string('Equipo')->nullable()->default(NULL);
            $table->string('Extension')->nullable()->default(NULL);
             $table->string('Punto_Red')->nullable()->default(NULL);
            $table->text('Observacion')->nullable()->default(NULL);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telefonos');
    }
};
