@extends('layouts.app')

@section('titulo', 'Editar peliculas: ' . $pelicula->nombre)

@section('contenido')
<form action="{{ route('pelicula.update',$pelicula) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre película</label>
        <input type="text" class="form-control" name="nombre" value="{{$pelicula->nombre}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Imagen</label>
        <input type="text" class="form-control" name="imagen" value="{{$pelicula->imagen}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
        <input type="text" class="form-control" name="descripcion" value="{{$pelicula->descripcion}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Trailer</label>
        <input type="text" class="form-control" name="trailer" value="{{$pelicula->trailer}}">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
