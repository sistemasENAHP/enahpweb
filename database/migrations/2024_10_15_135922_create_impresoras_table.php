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
        Schema::create('impresoras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('piso_id')->constrained('pisos');
            $table->foreignId('departamento_id')->constrained('departamentos');
            $table->String('Equipo')->nullable()->default(NULL);
            $table->String('ip_equipo')->nullable()->default(NULL);
            $table->String('tipo_conexion')->nullable()->default(NULL);
            $table->String('Punto_Red')->nullable()->default(NULL);
            $table->String('Marca')->nullable()->default(NULL);
            $table->String('Modelo')->nullable()->default(NULL);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('impresoras');
    }
};
