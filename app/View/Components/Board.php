<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Board extends Component
{
    public $color, $name, $digit, $money;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color, $name, $digit = 500, $money = false)
    {
        $this->color = $color;
        $this->name = $name;
        $this->digit = $digit;
        $this->money = $money;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.board');
    }
}