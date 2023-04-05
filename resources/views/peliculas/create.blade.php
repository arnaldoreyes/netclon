@extends('layouts.app')

@section('contenido')
<form action="{{route('pelicula.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre película</label>
        <input type="text" class="form-control" name="nombre">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Image</label>
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

    <button type="submit">Guardar</button>
</form>
@endsection
