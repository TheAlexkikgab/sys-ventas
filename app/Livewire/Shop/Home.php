<?php

namespace App\Livewire\Shop;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
    public $featured;
    public $newArrivals;

    public function mount()
    {
        $this->featured = Product::inRandomOrder()->limit(4)->get();
        $this->newArrivals = Product::latest()->limit(4)->get();
    }

    #[Layout('shop.layout')]
    public function render()
    {
        return view('livewire.shop.home');
    }
}