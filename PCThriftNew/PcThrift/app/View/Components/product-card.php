<?php

namespace App\View\Components;

use Illuminate\View\Component;

class productCard extends Component
{
    public function __construct($name, $image,$price)
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;

    }
    public function render()
    {
        return view('components.product-card');
    }
}
