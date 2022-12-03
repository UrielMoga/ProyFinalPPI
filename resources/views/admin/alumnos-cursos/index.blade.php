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
@foreach($curso as $curs)
        <div class="card-body">
            <h3>El curso "<span>{{$curs->nombre}}</span>" cuenta con los siguientes alumnos:</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ALUMNOS:</th>
                    <tr>
                </thead>
                <tbody>
                    @foreach($curs->alumnos as $registro)
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
