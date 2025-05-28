@extends('layouts.app')

@section('content')
<h2>Lista de Computadores</h2>
<a href="{{ route('computador.create') }}" class="btn btn-success mb-3">Nuevo</a>
{{-- Muestra lo que es un formulario para que pueda buscar el ID del computador usando la conexion de ruta --}}
<form method="GET" action="{{ route('computador.buscar') }}" class="mb-3">
    <input type="text" name="id" placeholder="Buscar por ID" class="form-control" />
    <button class="btn btn-info mt-2">Buscar</button>
</form>

{{-- Se muestra los productos que se tiene en la base de datos --}}
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th><th>Código Tienda</th><th>Almacenamiento</th><th>RAM</th><th>Gráfica</th><th>Precio</th><th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($computadores as $c)
        <tr>
            <td>{{ $c->id }}</td>
            <td>{{ $c->codigo_tienda }}</td>
            <td>{{ $c->almacenamiento }}</td>
            <td>{{ $c->ram }}</td>
            <td>{{ $c->tarjeta_grafica }}</td>
            <td>${{ $c->precio }}</td>
            <td>
                <a href="{{ route('computador.show', $c->id) }}" class="btn btn-primary btn-sm">Editar</a>
                <form action="{{ route('computador.destroy', $c->id) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
