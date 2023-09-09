
@extends('layouts.plantilla')

@section('title','SHOW' .$curso->nombre)
@section('content')

<h1>Bienvenido a la pagina principal con el {{$curso->nombre}}</h1>
<a href="{{Route('cursos.index')}}">Volver a Curso</a>
<br>
<a href="{{Route('cursos.edit',$curso)}}">Editar Curso</a>
<p><strong>Categoria: {{$curso->categoria}}</strong></p>
<P>{{$curso->descripcion}}</P>
@endsection
