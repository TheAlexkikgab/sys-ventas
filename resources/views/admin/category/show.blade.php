@vite(['resources/scss/admin/show.scss'])
@extends('admin.layout')
@section('content')
    <h1>Administración de Categorías</h1>
    <a href="{{ route('category.index') }}">Volver</a>
    <div class="category-titles">
        <p>Id</p>
        <p>name</p>
        <p>status</p>
        <p>create_at</p>
        <p>update_at</p>
        <p>action</p>
    </div>
    <div class="category">
        <p>{{ $category->id }}</p>
        <p>{{ $category->name }}</p>
        <p>{{ $category->status }}</p>
        <p>{{ $category->created_at }}</p>
        <p>{{ $category->updated_at }}</p>
            {{-- <a href="{{ route('category.show', ['category'=>$category]) }}">Detalles</a> --}}
            <a href="{{ route('category.edit', ['category'=>$category]) }}">Editar</a>
            <a href="">Eliminar</a>
    </div>
    {{-- {{ $category }} --}}
@endsection