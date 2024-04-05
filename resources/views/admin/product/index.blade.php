@vite(['resources/scss/admin/product_index.scss'])
@extends('admin.layout')
@section('content')
    <h1>Administración de Productos</h1>
    <x-admin.action-links routeName="product.create">Agregar nuevo producto</x-admin.action-links>
    @forelse ( $products as $product)
    @once
    <div class="product-titles">
        <div>Imagen</div>
        {{--<div>Id</div>
            <div>Id categoria</div> --}}
        <div>Nombre</div>
        {{-- <div>Descripcion</div>  --}}
        <div>Precio</div>
        <div>Cantidad</div>
        <div>Estado</div>
        <div>action</div>
    </div>
    @endonce
    <div class="product">
        <div><img src="{{asset('storage/'. $product->image) }}" width="45px"></div>
       {{--  <div>{{ $product->id }}</div>
             <div>{{ $product->category_id }}</div> --}}
        <div>{{ $product->name }}</div>
        {{-- <div>{{ $product->description }}</div>--}}
        <div>{{ $product->price }}</div>
        <div>{{ $product->quantity }}</div>
        <div>{{ $product->status }}</div>
        <div class="product-actions">

            <x-admin.action-links class="view" routeName="product.show" :routeParam="['product'=>$product]">Detalles</x-admin.action-links>
            <x-admin.action-links class="edit" routeName="product.edit" :routeParam="['product'=>$product]">Editar</x-admin.action-links>
            <x-admin.delete-form routeName="product.destroy" :routeParam="['product'=>$product]"/>
        </div class="category-actions">
    </div>
    @empty
    <p class="empty-p">No hay productos para mostrar</p>
    @endforelse

    {{ $products->links('admin.paginator') }}
@endsection