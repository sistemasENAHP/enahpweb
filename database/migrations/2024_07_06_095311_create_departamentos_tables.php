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

        Schema::create('pisos', function (Blueprint $table) {
            $table->id();
            $table->string('Pisos');
            $table->timestamps();
            $table->engine = 'InnoDB';

        });

        Schema::create('departamentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('piso_id')->constrained('pisos');
            $table->string('Departamento');
            $table->timestamps();
            $table->engine='InnoDB';

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pisos');
        Schema::dropIfExists('departamentos');
    }
};
