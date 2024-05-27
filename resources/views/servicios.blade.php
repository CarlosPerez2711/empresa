@extends('layouts.app')

@section('title', 'Servicios')

@section('content')
    <h1>Servicios</h1>
    @if($servicio)
        <p>Detalles del servicio: {{ $servicio }}</p>
    @else
        <p>Lista de servicios ofrecidos.</p>
    @endif
@endsection