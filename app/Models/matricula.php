<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matricula extends Model
{
    use HasFactory;

    protected $fillable = ['alumno_dni', 'asignatura_codigo', 'nota', 'incidencias'];

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'alumno_dni');
    }

    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class, 'asignatura_codigo');
    }
}




