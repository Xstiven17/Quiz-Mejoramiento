<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asignatura extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';
    protected $guarded = [];

    protected $fillable = ['codigo', 'nombre', 'horas'];

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'matriculas', 'asignatura_codigo', 'alumno_dni');
    }

    public function profesores()
    {
        return $this->belongsToMany(Profesor::class, 'asignatura_profesor', 'asignatura_codigo', 'profesor_dni');
    }

    public function aulas()
    {
        return $this->belongsToMany(Aula::class, 'aula_asignatura', 'asignatura_codigo', 'aula_codigo')->withPivot('hora');
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_codigo');
    }
}