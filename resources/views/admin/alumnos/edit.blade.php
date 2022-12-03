@extends('adminlte::page')

@section('title', 'Lista de Alumnos')

@section('content_header')
    <h1>Editar Alumno: {{$alumno->nombre}}</h1>
@stop

@section('content')
@if(session('mensaje'))
    <div class="alert alert-success">
        <strong>{{session('mensaje')}}</strong>
    </div>
@endif
<div class="card">
        <div class="card-body">
            {!! Form::model($alumno,['route'=>['admin.alumnos.update',$alumno], 'method'=>'put', 'enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                 {!! Form::label('nombre', 'Nombre') !!}
                 {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del alumno']) !!}
                 @error('nombre')
                 <span class="text-danger">{{$message}}<span>
                 @enderror
            </div>

            {!! Form::submit('Actualizar alumno',['class' => 'btn btn-primary btn-sm']) !!}

             {!! Form::close() !!}
        </div> 
    </div> 
@stop
