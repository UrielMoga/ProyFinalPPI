<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable=['nombre','activo'];
    public function curso(){
        return $this->belongsToMany(Curso::class, 'alumno_curso');
    }
}