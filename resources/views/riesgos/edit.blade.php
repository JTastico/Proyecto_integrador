@extends('layouts.app')

@section('content')
    <h1>Editar Riesgo</h1>
    <form action="{{ route('riesgos.update', $riesgos->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ $riesgos->name }}" required>
        <label for="description">Descripción:</label>
        <textarea name="description" id="description" required>{{ $riesgos->description }}</textarea>
        <label for="probability">Probabilidad:</label>
        <input type="number" name="probability" id="probability" value="{{ $riesgos->probability }}" required>
        <label for="impact">Impacto:</label>
        <input type="number" name="impact" id="impact" value="{{ $riesgos->impact }}" required>
        <button type="submit">Guardar</button>
    </form>
@endsection
