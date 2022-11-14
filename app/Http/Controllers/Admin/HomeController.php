<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function nuevo_curso(){
        return view('admin.nuevo-curso');
    }

    public function edita_curso(){
        return view('admin.edita-curso');
    }
}
