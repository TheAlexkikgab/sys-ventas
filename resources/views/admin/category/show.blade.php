@vite(['resources/scss/admin/show.scss'])
@extends('admin.layout')
@section('content')
    <h1>Administración de Categorías</h1>
    <x-admin.action-links routeName="category.index">Volver</x-admin.action-links>
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
        <div class="category-actions">
            <x-admin.action-links class="edit" routeName="category.edit" :routeParam="['category'=>$category]">Editar</x-admin.action-links>
            <x-admin.delete-form routeName="category.destroy" :routeParam="['category'=>$category]"/>
        </div class="category-actions">
    </div>
@endsection