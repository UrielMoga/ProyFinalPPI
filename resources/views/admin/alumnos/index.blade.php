@extends('adminlte::page')

@section('title', 'Lista de Alumnos')

@section('content_header')
    <h1>Alumnos</h1>
@stop

@section('content')
@if(session('mensaje'))
    <div class="alert alert-success">
        <strong>{{session('mensaje')}}</strong>
    </div>
@endif
    <div class="card-header">
        <a href="{{route('admin.alumnos.create')}}" class="btn btn-primary">Nuevo alumno</a>
    </div> 
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th colspan="2"></th>
                    <tr>
                </thead>
                <tbody>
                    @foreach($alumno as $alumn)
                    <tr>
                        <td>{{$alumn->id}}</td>
                        <td>{{$alumn->nombre}}</td>
                        <td width="15px"><a href="{{route('admin.alumnos.edit',$alumn)}}" class="btn btn-primary btn-sm">Editar</a></td>
                        <td width="15px">
                            <form action="{{route('admin.alumnos.destroy',$alumn)}}" method="POST">
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
