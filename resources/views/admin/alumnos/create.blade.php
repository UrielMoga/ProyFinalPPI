@extends('adminlte::page')

@section('title', 'Crear alumno')

@section('content_header')
    <h1>Nuevo alumno</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.alumnos.store','enctype'=>'multipart/form-data']) !!}
          
            <div class="form-group">
                 {!! Form::label('nombre', 'Nombre') !!}
                 {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del alumno']) !!}
                 @error('nombre')
                 <span class="text-danger">{{$message}}<span>
                 @enderror
            </div>

            {!! Form::submit('Guardar alumno',['class' => 'btn btn-primary btn-sm']) !!}

             {!! Form::close() !!}
        </div> 
    </div> 
@stop
