<?php

namespace App\Livewire\Shop;

use App\Models\Product;
use Livewire\Component;

use function Laravel\Prompts\alert;

class GridItem extends Component
{
    public $product;
    public function mount(Product $product)
    {
        $this->product = $product;
    }
    public function addToBasket()
    {
        $this->js("alert('El producto se añade al carrito')");
    }
    public function render()
    {
        return view('livewire.shop.grid-item');
    }
}