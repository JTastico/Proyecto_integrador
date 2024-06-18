@extends('layouts.app')

@section('content')
    <h1>Gestión de Riesgos</h1>
    <a href="{{ route('riesgos.create') }}">Crear nuevo riesgo</a>
    <ul>
        @foreach($riesgos as $riesgos)
            <li>
                <a href="{{ route('riesgos.show', $riesgos->id) }}">{{ $riesgos->name }}</a>
                <a href="{{ route('riesgos.edit', $riesgos->id) }}">Editar</a>
                <form action="{{ route('riesgos.destroy', $riesgos->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
