@extends('layouts.plantilla')

@section('title', 'create')
@section('content')

    <h1>Editar un curso</h1>
    <a href="{{route('cursos.show',$curso)}}">Volver a ver el curso</a>
    <br>
    <br>
    <form action="{{Route('cursos.update',$curso)}}" method="POST">
        @csrf 
        @method('put')
        <label for="">
            Nombre:
            <br>
            <input type="text" name="nombre"  value="{{old('nombre',$curso->nombre)}}">
        </label>

        @error('nombre')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label for="">
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion',$curso->descripcion)}}</textarea>
        </label>

        @error('descripcion')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label for="">
            Categoria:
            <br>
            <input type="text" name='categoria' value="{{old('categoria',$curso->categoria)}}">
        </label>

        @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection
