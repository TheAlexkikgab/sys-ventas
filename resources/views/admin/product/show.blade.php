@vite(['resources/scss/admin/product-show.scss'])
@extends('admin.layout')
@section('content')
    <h1>Administración de Productos</h1>
    <x-admin.action-links routeName="product.index">Volver</x-admin.action-links>
    <div class="product-details">
        <div class="product-colmn">
            <div class="p-title">Id</div>
            <div class="p-val">{{ $product->id }}</div>
        </div>

        <div class="product-colmn">
            <div class="p-title">Categoria</div>
            <div class="p-val">{{ $product->category->name }}</div>
        </div>

        <div class="product-colmn">
            <div class="p-title">Nombre</div>
            <div class="p-val">{{ $product->name }}</div>
        </div>

        <div class="product-colmn">
            <div class="p-title">descripcion</div>
            <div class="p-val">{{ $product->description }}</div>
        </div>

        <div class="product-colmn">
            <div class="p-title">Cantidad</div>
            <div class="p-val">{{ $product->quantity }}</div>
        </div>

        <div class="product-colmn">
            <div class="p-title">Precio</div>
            <div class="p-val">{{ $product->price }}</div>
        </div>

        @if ($product->image)
        <img src="{{ asset('storage/'. $product->image) }}" alt="">
        @endif


        <div class="product-colmn">
            <div class="p-title">Estado</div>
            <div class="p-val">{{ $product->status }}</div>
        </div>

        <div class="p-actions">
            <x-admin.action-links class="edit" routeName="product.edit" :routeParam="['product'=>$product]">Editar</x-admin.action-links>
            <x-admin.delete-form routeName="product.destroy" :routeParam="['product'=>$product]"/>
        </div>
    </div>
@endsection