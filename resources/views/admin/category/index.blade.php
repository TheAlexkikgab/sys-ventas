@vite(['resources/scss/admin/index.scss'])
@extends('admin.layout')
@section('content')
    <h1>Administración de Categorías</h1>
    <a href="{{ route('category.create') }}">Agregar nueva categoria</a>
    @forelse ( $categories as $category)
    @once
    <div class="category-titles">
        <p>Id</p>
        <p>name</p>
        <p>status</p>
        <p>action</p>
    </div>
    @endonce
    <div class="category">
        <p>{{ $category->id }}</p>
        <p>{{ $category->name }}</p>
        <p>{{ $category->status }}</p>
        <div class="category-action">
            <a href="{{ route('category.show', ['category'=>$category]) }}">Detalles</a>
            <a href="{{ route('category.edit', ['category'=>$category]) }}">Editar</a>
            {{-- <a href="">Eliminar</a> --}}
            <form action="{{ route('category.destroy', ['category'=>$category]) }}" method="POST">
            @method('DELETE')
            @csrf
            <input type="submit" value="Eliminar">
            </form>
        </div class="category-action">
    </div>
    @empty
    <p class="empty-p">No hay categorias para mostrar</p>
    @endforelse

    {{-- @if ($categories)
    <div class="category-titles">
        <p>Id</p>
        <p>Nombre</p>
        <p>Estado</p>
    </div>
    @foreach ($categories as $category )

    @endforeach
    @else

    @endif --}}
@endsection