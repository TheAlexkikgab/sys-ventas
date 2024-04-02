@vite(['resources/scss/admin/index.scss'])
@extends('admin.layout')
@section('content')
    <h1>Administración de Categorías</h1>
    <x-admin.action-links routeName="category.create">Agregar nueva categoria</x-admin.action-links>
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
        <div class="category-actions">

            <x-admin.action-links class="view" routeName="category.show" :routeParam="['category'=>$category]">Detalles</x-admin.action-links>
            <x-admin.action-links class="edit" routeName="category.edit" :routeParam="['category'=>$category]">Editar</x-admin.action-links>
            <x-admin.delete-form routeName="category.destroy" :routeParam="['category'=>$category]"/>
        </div class="category-actions">
    </div>
    @empty
    <p class="empty-p">No hay categorias para mostrar</p>
    @endforelse


@endsection