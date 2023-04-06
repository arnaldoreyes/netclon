@extends('layouts.app')

@section('titulo', 'Lista de peliculas')

@section('contenido')
    <a class="btn btn btn-primary" href="{{route('pelicula.create')}}" role="button">Crear pelicula</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Imagen</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($peliculas as $pelicula)
                <tr>
                    <th scope="row">{{ $pelicula->id }}</th>
                    <td>{{ $pelicula->nombre }}</td>
                    <td>{{ $pelicula->imagen }}</td>
                    <td>{{ $pelicula->descripcion }}</td>
                    <td class="d-flex">
                        <a class="btn btn-sm btn-primary me-1" href="{{route('pelicula.edit',$pelicula->id)}}" role="button">Editar</a>
                        <form method="POST" action="{{route('pelicula.destroy',$pelicula->id)}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
