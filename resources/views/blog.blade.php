@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <h1>Blog</h1>
    @if($post)
        <p>Detalles del post #{{ $post }}</p>
    @else
        <p>Lista de artículos recientes:</p>
        <ul>
            <li>Artículo 1</li>
            <li>Artículo 2</li>
            <li>Artículo 3</li>
        </ul>
    @endif
@endsection