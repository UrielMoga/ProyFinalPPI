<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Curso; 
use App\Models\Image; 

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cursos = Curso::all();
        return view('admin.cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('admin.cursos.create');
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
        $request->validate(
            ['nombre'=>'required',
            'precio' =>'required',
            'ruta'=>'required',
            'archivo'=>'required',
            'categoria' =>'required',
            'descripcion'=>'required',
            ]
        );

        $nameImage = $request->archivo->getClientOriginalName();

        $request->archivo->move(public_path('img'), $nameImage);

        $request->merge(
            ['rutaimagen'=>$nameImage,
            ]
        );

        $curso = Curso::create($request->all());
        return redirect()->route('admin.cursos.edit',$curso)->with('mensaje','El curso se ha guardado exitosamente');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //
        return view('admin.cursos.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        //
        return view('admin.cursos.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        //
        $request->validate(
            ['nombre'=>'required',
            'precio' =>'required',
            'ruta'=>'required',
            'archivo'=>'required',
            'categoria' =>'required',
            'descripcion'=>'required',
            ]
        );

        $nameImage = $request->archivo->getClientOriginalName();

        $request->archivo->move(public_path('img'), $nameImage);

        $request->merge(
            ['rutaimagen'=>$nameImage,
            ]
        );

        $curso ->update($request->all());
        return redirect()->route('admin.cursos.edit',$curso)->with('mensaje','El curso se ha actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso -> delete();
        return redirect()->route('admin.cursos.index')->with('mensaje','El curso se ha eliminado exitosamente');
  
    }
}
