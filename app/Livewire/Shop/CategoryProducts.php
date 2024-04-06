<?php

namespace App\Livewire\Shop;

use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CategoryProducts extends Component
{
    public $category;
    public function mount(Category $category)
    {
        $this->category = $category;
    }
    #[Layout('shop.layout')]
    public function render()
    {
        $products = Product::where('category_id', $this->category->id)->get();
        return view('livewire.shop.category-products', ['products'=>$products]);
    }
}