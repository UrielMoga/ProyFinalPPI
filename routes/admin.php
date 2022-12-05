<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CursoController;
use App\Http\Controllers\Admin\AlumnoController;
use App\Http\Controllers\Admin\AlumnoCursoController;
use App\Http\Controllers\Admin\CursoAlumnoController;
use App\Exports\Admin\AlumnoExport;

Route::get('', [HomeController::class, 'index']);

Route::get('/exportar-alumnos', function(){
    $alumnosExport = new AlumnoExport;
    return $alumnosExport->download('alumnos.xlsx');
});

Route::resource('/curso', CursoController::class)->names('admin.cursos');

Route::resource('/alumnos',AlumnoController::class)->names('admin.alumnos');

Route::resource('/resumen-alumnos', AlumnoCursoController::class)->names('admin.resumen.alumnos');

Route::resource('/resumen-cursos', CursoAlumnoController::class)->names('admin.resumen.cursos');
