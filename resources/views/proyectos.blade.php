@extends('layouts.app')

@section('title', 'Proyectos')

@section('content')
    <h1>Proyectos</h1>
    @if($proyecto)
        <p>Detalles del proyecto: {{ $proyecto }}</p>
    @else
        <p>Lista de proyectos realizados:</p>
        <ul>
            <li>Proyecto 1</li>
            <li>Proyecto 2</li>
            <li>Proyecto 3</li>
        </ul>
    @endif
@endsection