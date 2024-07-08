<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aula extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';
    protected $guarded = [];

    protected $fillable = ['codigo', 'piso', 'pupitres', 'dia', 'mes'];

    public function asignatura(){
        return $this->belongsToMany(Asignatura::class, 'aula_asignatura', 'aula_codigo', 'asignatura_codigo')->withPivot('hora');
    }
}
