<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $data = $this->validateData();
        $product = Product::create($data);
        //dd($product);
        $this->storeImage($product);
        return to_route('product.show', compact('product'));
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $this->validateData();
        $product->update($data);
        $this->storeImage($product);
        return to_route('product.show', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('product.index');
    }

    private function validateData() 
    {
        $data = request()->validate([
            'name' => 'required',
            'category_id' =>'required|exists:categories,id',
            'description' => 'nullable',
            'price' => 'nullable|numeric|min:1',
            'quantity'=> 'nullable|numeric|min:0',
            'image' => 'sometimes|file|image|max:5000',
            'status' => 'required'
        ]);
        return $data;
    }
    private function storeImage($product)
    {
        if(request()->hasFile('image')){
            $product->update([
                'image'=>request()->file('image')->store('uploads', 'public')
            ]);
         }

         /*$image = Image::make(public_path('storage/' .$product->image));
         $image->fit(400, 400)->save();*/
    }
}
