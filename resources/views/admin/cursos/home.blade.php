@section('title', 'Lista de Cursos')

@section('content_header')
    <h1>Cursos</h1>
@stop

@section('content')
    <div class="card">
                    @foreach($cursos as $curso)
                    <div class="card-body">
                        <h1>{{$curso->nombre}}</h1>
                        <a href=""><img src="/img/{{$curso->rutaimagen}}" width="150px"></a>
        </div>    
        @endforeach
    </div>    
@stop
