@vite(['resources/scss/admin/editcreateform.scss'])
@extends('admin.layout')
@section('content')
    <h1>Actualizar categoria</h1>
    <a href="{{ route('category.show', ['category'=>$category]) }}">Volver</a>
    {{-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur facilis unde nulla pariatur quos.</p>--}}
    {{--{{ $category }}--}}
    <form action="{{ route('category.update', ['category'=>$category]) }}" class="create" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Nombre de la categoria:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="status">Estado de la categoria:</label>
            <select name="status" id="status">
                <option value="1" {{ old('status', $category->status)=='1'?'selected':''}}>Active</option>
                <option value="0" {{ old('status', $category->status)=='0'?'selected':''}}>Inactive</option>
            </select>
            @error('status')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="submit" value="Submit">
        </div>
@endsection