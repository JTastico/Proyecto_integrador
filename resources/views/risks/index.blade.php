@extends('layouts.app')

@section('content')
    <h1>Gestión de Riesgos</h1>
    <a href="{{ route('risks.create') }}">Crear nuevo riesgo</a>
    <ul>
        @foreach($risks as $risk)
            <li>
                <a href="{{ route('risks.show', $risk->id) }}">{{ $risk->name }}</a>
                <a href="{{ route('risks.edit', $risk->id) }}">Editar</a>
                <form action="{{ route('risks.destroy', $risk->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
