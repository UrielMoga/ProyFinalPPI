<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable=['nombre', 'precio', 'ruta', 'archivo', 'rutaimagen', 'categoria', 'descripcion','usrins'];

    public function alumnos(){
        return $this->belongsToMany(Alumno::class, 'alumno_curso');
    }
}
