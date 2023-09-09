@extends('layouts.plantilla')

@section('title', 'create')
@section('content')

    <h1>Bienvenido a la pagina principal con el create</h1>

    <form action="{{Route('cursos.store')}}" method="POST">
        @csrf 
        <label for="">
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre')}}">
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
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
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
            <input type="text" name='categoria' value="{{old('categoria')}}">
        </label>
        @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection
