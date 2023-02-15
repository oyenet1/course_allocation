<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class Add extends Component
{
    public $name, $precede;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $precede = 'Add')
    {
        $this->name = $name;
        $this->precede = $precede;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button.add');
    }
}