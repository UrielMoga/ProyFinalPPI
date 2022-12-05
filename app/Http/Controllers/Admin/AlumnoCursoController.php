<?php
namespace App\Http\Controllers\Admin;

use App\Models\Admin\Alumno;
use App\Models\Admin\Curso;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlumnoCursoController extends Controller
{
    public function index(){
        $alumno = Alumno::All()->where('activo', 'si');
        return view('admin/cursos-alumnos/index',compact('alumno'));
    }
   
}

