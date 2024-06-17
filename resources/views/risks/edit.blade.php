@extends('layouts.app')

@section('content')
    <h1>Editar Riesgo</h1>
    <form action="{{ route('risks.update', $risk->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ $risk->name }}" required>
        <label for="description">Descripción:</label>
        <textarea name="description" id="description" required>{{ $risk->description }}</textarea>
        <label for="probability">Probabilidad:</label>
        <input type="number" name="probability" id="probability" value="{{ $risk->probability }}" required>
        <label for="impact">Impacto:</label>
        <input type="number" name="impact" id="impact" value="{{ $risk->impact }}" required>
        <button type="submit">Guardar</button>
    </form>
@endsection
