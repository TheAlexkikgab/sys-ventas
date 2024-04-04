<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //display all rows in the table
    public function index(Category $category)
    {
        $categories = $category->all();
        return view('admin.category.index', compact('categories'));
    }

    //Muestra la fila especifica
    public function show(Category $category)
    {

        return view('admin.category.show', ['category'=>$category]);
    }

    //Mostrar formulario para la nueva fila
    public function create()
    {
        return view('admin.category.create');
    }

    //Enviar formulario que contiene datos para la nueva fila
    public function store(Request $request, Category $category)
    {
        //dd($request->input('_token'));
        $data = $request->validate([
            'name' => ['required', 'min:4', 'max:30', 'unique:categories'],
            'status' => 'sometimes'
            //"col1"=>[]
        ]);
        $category = $category->create($data);
        return to_route('category.show', ['category' => $category]);
        //return redirect('/admin/categories');
    }

    //Devolver formularios con datos de la fila especifica
    public function edit(Category $category)
    {
        return view('admin.category.edit', ['category'=>$category]);
    }

    //formulario enviado con datos actualizados 
    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name' => ['required', 'min:4', 'max:30', 'unique:categories'],
            'status' => 'sometimes'
            //"col1"=>[]
        ]);
        $category->update($data);
        return to_route('category.show', ['category' => $category]);
    }

    //Eliminar una fila especifica de la tabla 
    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('category.index');
    }
}
