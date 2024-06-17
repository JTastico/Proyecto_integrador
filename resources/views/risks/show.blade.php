@extends('layouts.app')

@section('content')
    <h1>{{ $risk->name }}</h1>
    <p>{{ $risk->description }}</p>
    <p>Probabilidad: {{ $risk->probability }}</p>
    <p>Impacto: {{ $risk->impact }}</p>
    <a href="{{ route('risks.index') }}">Volver a la lista</a>
@endsection
