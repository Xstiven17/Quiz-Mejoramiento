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
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            $table->string('alumno_dni');
            $table->string('asignatura_codigo');
            $table->integer('nota')->nullable();
            $table->text('incidencias')->nullable();
            $table->timestamps();

            $table->foreign('alumno_dni')->references('dni')->on('alumnos');
            $table->foreign('asignatura_codigo')->references('codigo')->on('asignaturas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};
