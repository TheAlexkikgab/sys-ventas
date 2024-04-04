@vite(['resources/scss/admin/editcreateform.scss'])
@extends('admin.layout')
@section('content')
    <h1>Actualizar Producto</h1>
{{--     <a href="{{ route('product.show', ['product'=>$product]) }}">Volver</a> --}}
    <x-admin.action-links routeName="product.show" :routeParam="['product'=>$product]">Volver</x-admin.action-links>
    <form action="{{ route('product.update', ['product'=>$product]) }}" class="create" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="category_id">Categoría</label>
            {{-- <input type="text" name="category_id" id="category_id" value="{{ old('category_id', $product->category_id) }}"> --}}
            <select name="category_id" id="category">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id===$product->category_id ? 'selected':'' }}>{{ $category->name }}</option>
                @endforeach    
            </select>  
            @error('category_id')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Descripcion</label>
            <input type="text" name="description" id="description" value="{{ old('description', $product->description) }}">
            @error('description')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="quantity">Cantidad</label>
            <input type="number" name="quantity" id="quantity" value="{{ old('quantity', $product->quantity) }}">
            @error('quantity')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}">
            @error('price')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Imagen</label>
            <input type="file" name="image" id="image" value="{{ old('image', $product->image) }}">
            @error('image')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="status">Estado del producto:</label>
            <select name="status" id="status">
                <option value="1" {{ old('status', $product->status)=='1'?'selected':''}}>Active</option>
                <option value="0" {{ old('status', $product->status)=='0'?'selected':''}}>Inactive</option>
            </select>
            @error('status')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="submit" value="Submit">
        </div>
@endsection