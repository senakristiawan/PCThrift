<?php

namespace App\View\Components;

use Illuminate\View\Component;

class consultantCards extends Component
{
    public $image;
    public $name;
    public $job;
    public $desc;

    public function __construct($image, $name, $job, $desc)
    {
        $this->image = $image;
        $this->name = $name;
        $this->job = $job;
        $this->desc = $desc;
    }

    public function render()
    {
        return view('components.consultant-cards');
    }
}
