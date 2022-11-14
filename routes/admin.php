<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CursoController;

Route::get('', [HomeController::class, 'index']);

Route::resource('/curso', CursoController::class)->names('admin.cursos');
