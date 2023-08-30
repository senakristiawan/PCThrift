<?php

namespace App\View\Components;

use Illuminate\View\Component;

class bundleCards extends Component
{
    public $image;
    public $name;
    public $price;

    public function __construct($image, $name, $price)
    {
        $this->image = $image;
        $this->name = $name;
        $this->price = $price;
    }
    public function render()
    {
        return view('components.bundle-cards');
    }
}
