@extends('layouts.app')

@section('content')
<h2>Registrar Computador</h2>
<form action="{{ route('computador.store') }}" method="POST">
    @csrf
    @include('computador.form')
    <button class="btn btn-success">Guardar</button>
</form>
@endsection
