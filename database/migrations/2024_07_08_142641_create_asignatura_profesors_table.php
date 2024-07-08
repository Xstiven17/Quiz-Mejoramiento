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
        Schema::create('asignatura_profesors', function (Blueprint $table) {
            $table->id();
            $table->string('asignatura_codigo');
            $table->string('profesor_dni');
            $table->timestamps();

            $table->foreign('asignatura_codigo')->references('codigo')->on('asignaturas');
            $table->foreign('profesor_dni')->references('dni')->on('profesores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignatura_profesors');
    }
};
