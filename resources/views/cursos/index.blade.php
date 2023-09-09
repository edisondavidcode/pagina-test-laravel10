@extends('layouts.plantilla')

@section('title', 'INDEX')
@section('content')

    <h1>Bienvenido a la pagina principal con el INDEX</h1>
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show',$curso->id)}}">{{$curso->nombre}}</a>
            </li>
        @endforeach
    </ul>
    {{$cursos->links()}}

@endsection
