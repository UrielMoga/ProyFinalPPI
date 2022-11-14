@extends('adminlte::page')

@section('title', 'Crear Curso')

@section('content_header')
    <h1>Nuevo Curso</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.cursos.store']) !!}
            <div class="form-group">
                 {!! Form::label('nombre', 'Nombre') !!}
                 {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Curso']) !!}
                 @error('nombre')
                 <span class="text-danger">{{$message}}<span>
                 @enderror
            </div>
            <div class="form-group">
                 {!! Form::label('precio', 'Precio') !!}
                 {!! Form::number('precio', null, ['class' => 'form-control', 'placeholder' => 'Precio del Curso']) !!}
                 @error('precio')
                 <span class="text-danger">{{$message}}<span>
                 @enderror
            </div>
            <div class="form-group">
                 {!! Form::label('ruta', 'Ruta') !!}
                 {!! Form::text('ruta', null, ['class' => 'form-control', 'placeholder' => 'Ruta del Curso']) !!}
                 @error('ruta')
                 <span class="text-danger">{{$message}}<span>
                 @enderror
            </div>
            <div class="form-group">
                 {!! Form::label('categoria', 'Categoria') !!}
                 {!! Form::text('categoria', null, ['class' => 'form-control', 'placeholder' => 'Categoria del Curso']) !!}
                 @error('categoria')
                 <span class="text-danger">{{$message}}<span>
                 @enderror
            </div>
            <div class="form-group">
                 {!! Form::label('descripcion', 'Descripcion') !!}
                 {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Categoria del Curso']) !!}
                 @error('descripcion')
                 <span class="text-danger">{{$message}}<span>
                 @enderror
            </div>

            {!! Form::submit('Guardar Curso',['class' => 'btn btn-primary btn-sm']) !!}

             {!! Form::close() !!}
        </div> 
    </div> 
@stop
