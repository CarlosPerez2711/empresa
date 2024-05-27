@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <h1>Clientes</h1>
    @if($cliente)
        <p>Detalles del cliente: {{ $cliente }}</p>
    @else
        <p>Lista de nuestros clientes:</p>
        <ul>
            <li>Cliente 1</li>
            <li>Cliente 2</li>
            <li>Cliente 3</li>
        </ul>
    @endif
@endsection