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


        Schema::create('users', function (Blueprint $table) {

            $table->id();
            $table->foreignId('departamento_id')->constrained('departamentos');
            $table->string('name');
            $table->string('surname');
            $table->string('identification_card')->unique();
            $table->timestamp('identification_card_verified_at')->nullable();
            $table->string('ip_equipo');
            $table->string('nombre_equipo');
            $table->string('telefono');
            $table->string('telefonoI');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->engine = 'InnoDB';

        });
    Schema::create('ips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->nullable()->default(NULL);
             // $table->string('equipo')->nullable()->default(NULL);
            $table->string('ip_escuela')->nullable()->default(NULL);
            $table->string('ip_ministerio')->nullable()->default(NULL);
             $table->text('Observacion',200)->nullable()->default(NULL);
            $table->timestamps();
            $table->engine = 'InnoDB';

        });


        Schema::create('password_reset_tokens', function (Blueprint $table) {

            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
            $table->engine = 'InnoDB';

        });

        Schema::create('sessions', function (Blueprint $table) {

            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
            $table->engine = 'InnoDB';

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('ips');
    }
};
