<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ActionLinks extends Component
{
    public $routeName;
    public $routeParam;
    //public $class
    /**
     * Create a new component instance.
     */
    public function __construct($routeName, $routeParam=[])
    {
        $this->routeName=$routeName;
        $this->routeParam=$routeParam;
    }
    /**
     * Get the view / contens that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.action-links');
    }
}