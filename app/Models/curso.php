<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';
    protected $guarded = [];

    protected $fillable = ['codigo', 'nombre'];


    public function asignaturas()
    {
        return $this->hasMany(Asignatura::class, 'curso_codigo');
    }

}



  

   