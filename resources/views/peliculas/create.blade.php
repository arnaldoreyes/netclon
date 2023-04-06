@extends('layouts.app')

@section('titulo', 'Crear peliculas')

@section('contenido')

    <form action="{{route('pelicula.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre película</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Imagen</label>
            <input type="text" class="form-control" name="imagen">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
            <input type="text" class="form-control" name="descripcion">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Trailer</label>
            <input type="text" class="form-control" name="trailer">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
