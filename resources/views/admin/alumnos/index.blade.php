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
        <a href="/admin/exportar-alumnos" class="btn btn-primary">Descargar lista de alumnos</a>
    </div> 
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th colspan="1"></th>
                    <tr>
                </thead>
                <tbody>
                    @foreach($alumno as $alumn)
                    <tr>
                        <td>{{$alumn->id}}</td>
                        <td>{{$alumn->nombre}}</td>
                        <td width="15px"><a href="{{route('admin.alumnos.edit',$alumn)}}" class="btn btn-primary btn-sm">Editar</a></td>
                    <tr>
                    @endforeach
                </tbody>
            </table>
        </div>    
    </div>    
@stop
