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
        Schema::create('listado_routers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->nullable()->default(NULL);
            $table->foreignId('departamento_id')->constrained('departamentos');
            $table->foreignId('piso_id')->constrained('pisos');
             $table->String('Equipo')->nullable()->default(NULL);
            $table->String('Nombre_Wifi')->nullable()->default(NULL);
            $table->String('Clave_Wifi')->nullable()->default(NULL);
            $table->String('Usuario_Root')->nullable()->default(NULL);
            $table->String('Clave_Root')->nullable()->default(NULL);
            $table->String('ip_acceso')->nullable()->default(NULL);
            $table->String('ip_route')->nullable()->default(NULL);
            $table->String('Punto_Red')->nullable()->default(NULL);
            $table->text('Observacion',100)->nullable()->default(NULL);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listado_routers');
    }
};
