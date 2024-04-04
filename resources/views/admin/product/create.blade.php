@vite(['resources/scss/admin/editcreateform.scss'])
@extends('admin.layout')
@section('content')
    <h1>Agregar nueva producto</h1>
    <form action="{{ route('product.store') }}" class="create" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nombre del producto:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>

{{-- Ingresar Categoria del producto --}}
        <div class="form-group">
            <label for="category">Categoria del producto:</label>
          {{--   <input type="text" name="category_id" id="category" value="{{ old('category_id') }}"> --}}
            <select name="category_id" id="category">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach    
            </select>    
          @error('category_id')
                <p>{{ $message }}</p>
            @enderror
        </div>

{{--Ingresar Descripcion del producto --}}
        <div class="form-group">
            <label for="description">Descripción del producto:</label>
            <textarea name="description" id="description">{{ old('description') }}</textarea>
            @error('description')
                <p>{{ $message }}</p>
            @enderror
        </div>

{{--Ingresar Precio del producto --}}
        <div class="form-group">
            <label for="price">Precio del producto:</label>
            <input type="number" name="price" id="price" value="{{ old('price') }}">
            @error('price')
                <p>{{ $message }}</p>
            @enderror
        </div>

{{--Ingresar Cantidad del producto --}}
        <div class="form-group">
            <label for="quantity">Cantidad del producto:</label>
            <input type="number" name="quantity" id="quantity" value="{{ old('quantity') }}">
            @error('quantity')
                <p>{{ $message }}</p>
            @enderror
        </div>

{{--Ingresar Imagen del producto --}}
        <div class="form-group">
            <label for="image">Foto del producto:</label>
            <input type="file" name="image" id="image" value="{{ old('image') }}">
            @error('image')
                <p>{{ $message }}</p>
            @enderror
        </div>

{{-- Elegir Estado del producto --}}
        <div class="form-group">
            <label for="status">Estado del producto:</label>
            <select name="status" id="status">
                <option value="1" {{ old('status')=='1'?'selected':''}}>Active</option>
                <option value="0" {{ old('status')=='0'?'selected':''}}>Inactive</option>
            </select>
            @error('status')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="submit" value="Submit">
        </div>
@endsection