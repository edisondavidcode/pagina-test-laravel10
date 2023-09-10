@extends('layouts.plantilla')

@section('title', 'Contactanos')
@section('content')

    <h1>Dejanos un mensajes</h1>

    <form action="{{ route('contactanos.store') }}" method="POST">
        @csrf
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" id="">
        </label>
        @error('name')
            <p><strong>*{{ $message }}</strong></p>
        @enderror
        <br>
        <label for="">
            Correo:
            <br>
            <input type="text" name="correo" id="">
        </label>
        @error('correo')
            <p><strong>*{{ $message }}</strong></p>
        @enderror
        <br>
        <br>
        <label for="">
            Mensaje:
            <br>
            <textarea name="mensaje" rows="5"></textarea>
        </label>
        @error('mensaje')
            <p><strong>*{{ $message }}</strong></p>
        @enderror
        <br>
        <br>
        <button type="submit">Enviar mensaje</button>
        <br>
        <br>

    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
@endsection
