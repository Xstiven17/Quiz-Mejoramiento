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
        Schema::create('aula_asignaturas', function (Blueprint $table) {
            $table->id();
            $table->string('aula_codigo');
            $table->string('asignatura_codigo');
            $table->integer('hora');

            $table->foreign('aula_codigo')->references('codigo')->on('aulas');
            $table->foreign('asignatura_codigo')->references('codigo')->on('asignaturas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aula_asignaturas');
    }
};

