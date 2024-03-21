<?php

namespace App\Livewire\Shop;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
    #[Layout('shop.layout')]
    public function render()
    {
        return view('livewire.shop.home');
    }
}
