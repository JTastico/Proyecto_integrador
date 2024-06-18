@extends('layouts.app')

@section('content')
    <h1>{{ $riesgos->name }}</h1>
    <p>{{ $riesgos->description }}</p>
    <p>Probabilidad: {{ $riesgos->probability }}</p>
    <p>Impacto: {{ $riesgos->impact }}</p>
    <a href="{{ route('riesgos.index') }}">Volver a la lista</a>
@endsection
