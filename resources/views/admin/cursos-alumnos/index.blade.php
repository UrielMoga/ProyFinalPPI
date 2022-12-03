@extends('adminlte::page')

@section('title', 'Lista de Cursos')

@section('content_header')
    <h1>Resumen de Cursos</h1>
@stop

@section('content')
@if(session('mensaje'))
    <div class="alert alert-success">
        <strong>{{session('mensaje')}}</strong>
    </div>
@endif
@foreach($alumno as $alumn)
    <div class="card">
            <div class="card-body">
                <h3>Alumno <span>{{$alumn->nombre}}</span> Cursa las materias:</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>MATERIAS</th>
                        <tr>
                    </thead>
                    <tbody>
                        @foreach($alumn->curso as $registro)
                        <tr>
                            <td>{{$registro->nombre}}</td>
                        <tr>
                        @endforeach
                    </tbody>
                </table>
            </div>   
@endforeach
    </div>    
@stop
