@extends('layouts.app')

@section('content')
<h2>Editar Computador</h2>
<form action="{{ route('computador.update', $computador->id) }}" method="POST">
    @csrf @method('PUT')
    @include('computador.form', ['computador' => $computador])
    <button class="btn btn-primary">Actualizar</button>
</form>
@endsection
