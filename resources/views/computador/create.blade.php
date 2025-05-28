@extends('layouts.app')

@section('content')
{{-- Donde se crea lo que es un nuevo computador siguiendo los campos que se necesita dentro del registro --}}
<h2>Registrar Computador</h2>
<form action="{{ route('computador.store') }}" method="POST">
    @csrf
    @include('computador.form')
    <button class="btn btn-success">Guardar</button>
</form>
@endsection
