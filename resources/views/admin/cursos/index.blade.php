@extends('adminlte::page')

@section('title', 'Lista de Cursos')

@section('content_header')
    <h1>Cursos</h1>
@stop

@section('content')
@if(session('mensaje'))
    <div class="alert alert-success">
        <strong>{{session('mensaje')}}</strong>
    </div>
@endif
    <div class="card-header">
        <a href="{{route('admin.cursos.create')}}" class="btn btn-primary">Nuevo Curso</a>
    </div> 
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>PRECIO</th>
                        <th>RUTA</th>
                        <th>CATEGORIA</th>
                        <th>DESCRIPCION</th>
                        <th colspan="2"></th>
                    <tr>
                </thead>
                <tbody>
                    @foreach($cursos as $curso)
                    <tr>
                        <td>{{$curso->id}}</td>
                        <td>{{$curso->nombre}}</td>
                        <td>${{$curso->precio}} MXN</td>
                        <td>{{$curso->ruta}}</td>
                        <td>{{$curso->categoria}}</td>
                        <td>{{$curso->descripcion}}</td>
                        <td width="15px"><a href="{{route('admin.cursos.edit',$curso)}}" class="btn btn-primary btn-sm">Editar</a></td>
                        <td width="15px">
                            <form action="{{route('admin.cursos.destroy',$curso)}}" method="POST">
                                @method('delete')
                                @csrf
                                <input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    <tr>
                    @endforeach
                </tbody>
            </table>
        </div>    
    </div>    
@stop
