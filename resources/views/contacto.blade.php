@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
    <h1>Contacto</h1>
    <p>Puedes contactarnos a través del siguiente formulario:</p>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contacto.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa tu nombre" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="message">Mensaje</label>
            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Ingresa tu mensaje">{{ old('message') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
