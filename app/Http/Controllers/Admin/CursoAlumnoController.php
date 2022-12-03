<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Alumno;
use App\Models\Admin\Curso;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CursoAlumnoController extends Controller
{
    public function index(){
        $curso = Curso::all();
        return view('admin/alumnos-cursos/index',compact('curso'));
    }
}
