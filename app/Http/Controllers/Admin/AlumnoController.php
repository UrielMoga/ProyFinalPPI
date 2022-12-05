<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Alumno; 

class AlumnoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $alumno = Alumno::All()->where('activo', 'si');
        return view('admin.alumnos.index', compact('alumno'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('admin.alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->merge(
            [
            'activo'=>"si"
            ]
        );

        $request->validate(
            ['nombre'=>'required',
            'activo'=>'required'
            ]
        );

        $alumno = Alumno::create($request->all());
        return redirect()->route('admin.alumnos.edit',$alumno)->with('mensaje','El Alumno se ha guardado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
        return view('admin.alumnos.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        //
        return view('admin.alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        $request->validate(
            ['nombre'=>'required',
            'activo'=>'required'
            ]
        );

        $alumno ->update($request->all());
        return redirect()->route('admin.alumnos.edit',$alumno)->with('mensaje','El Alumno se ha actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno -> delete();
        return redirect()->route('admin.alumnos.index')->with('mensaje','El alumno se ha eliminado exitosamente');
  
    }
}
