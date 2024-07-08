<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    use HasFactory;

    protected $primaryKey = 'dni';
    protected $guarded = [];

    protected $fillable = ['dni', 'apellidos'];


    public function asignatura(){
        return $this->hasMany(asignatura::class, 'dni', 'alumnos');

        
}
}
