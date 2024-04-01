@vite(['resources/scss/admin/editcreateform.scss'])
@extends('admin.layout')
@section('content')
    <h1>Agregar nueva categoria</h1>
    {{-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur facilis unde nulla pariatur quos.</p>--}}
    {{--{{ $category }}--}}
    <form action="{{ route('category.store') }}" class="create" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nombre de la categoria:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="status">Estado de la categoria:</label>
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