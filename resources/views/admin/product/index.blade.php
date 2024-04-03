@vite(['resources/scss/admin/index.scss'])
@extends('admin.layout')
@section('content')
    <h1>Administración de Productos</h1>
    <x-admin.action-links routeName="product.create">Agregar nuevo producto</x-admin.action-links>
    @forelse ( $products as $product)
    @once
    <div class="category-titles">
        <p>Id</p>
        {{-- <p>Id de categoria</p> --}}
        <p>name</p>
        {{-- <p>Descripcion</p> 
        <p>Precio</p>
        <p>Cantidad</p>
        <p>Imagen</p>--}}
        <p>Estado</p>
        <p>action</p>
    </div>
    @endonce
    <div class="category">
        <p>{{ $product->id }}</p>
        {{-- <p>{{ $product->category_id }}</p> --}}
        <p>{{ $product->name }}</p>
        {{-- <p>{{ $product->description }}</p>
        <p>{{ $product->price }}</p>
        <p>{{ $product->quantity }}</p>
        <p>{{ $product->image }}</p> --}}
        <p>{{ $product->status }}</p>
        <div class="category-actions">

            <x-admin.action-links class="view" routeName="product.show" :routeParam="['product'=>$product]">Detalles</x-admin.action-links>
            <x-admin.action-links class="edit" routeName="product.edit" :routeParam="['product'=>$product]">Editar</x-admin.action-links>
            <x-admin.delete-form routeName="product.destroy" :routeParam="['product'=>$product]"/>
        </div class="category-actions">
    </div>
    @empty
    <p class="empty-p">No hay productos para mostrar</p>
    @endforelse


@endsection