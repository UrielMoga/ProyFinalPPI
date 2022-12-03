@extends('adminlte::page')

@section('title', 'Lista de Cursos')

@section('content_header')
    <h1>Editar curso: {{$curso->nombre}}</h1>
@stop

@section('content')
@if(session('mensaje'))
    <div class="alert alert-success">
        <strong>{{session('mensaje')}}</strong>
    </div>
@endif
<div class="card">
        <div class="card-body">
            {!! Form::model($curso,['route'=>['admin.cursos.update',$curso], 'method'=>'put', 'enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                 {!! Form::label('nombre', 'Nombre') !!}
                 {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del curso']) !!}
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
                 {!! Form::label('archivo', 'Archivo') !!}<br>
                 <img src="/img/{{$curso->rutaimagen}}" width="150px"><br><br>
                 {!! Form::file('archivo') !!}
                 @error('archivo')
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

            {!! Form::submit('Actualizar Curso',['class' => 'btn btn-primary btn-sm']) !!}

             {!! Form::close() !!}
        </div> 
    </div> 
@stop
