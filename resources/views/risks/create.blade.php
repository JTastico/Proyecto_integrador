@extends('layouts.app')

@section('content')
    <h1>Crear Riesgo</h1>
    <form action="{{ route('risks.store') }}" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required>
        <label for="description">Descripción:</label>
        <textarea name="description" id="description" required></textarea>
        <label for="probability">Probabilidad:</label>
        <input type="number" name="probability" id="probability" required>
        <label for="impact">Impacto:</label>
        <input type="number" name="impact" id="impact" required>
        <button type="submit">Guardar</button>
    </form>
@endsection
