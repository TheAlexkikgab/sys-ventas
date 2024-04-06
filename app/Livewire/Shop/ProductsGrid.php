<?php

namespace App\Livewire\Shop;

use Livewire\Component;

class ProductsGrid extends Component
{
    public $products;
    public function mount($products){
        $this->products = $products;
    }
    public function render()
    {
        return view('livewire.shop.products-grid');
    }
}
