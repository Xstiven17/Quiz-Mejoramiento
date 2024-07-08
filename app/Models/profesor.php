<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
    use HasFactory;

    protected $primaryKey = 'dni';
    protected $guarded = [];

    protected $fillable = ['dni', 'apellidos'];

    public function asignatura(){
        return $this->belongsToMany(Asignatura::class, 'asignatura_profesor', 'profesor_dni', 'asignatura_codigo');
    }
}
