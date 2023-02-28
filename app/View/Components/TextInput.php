<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextInput extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type;
    public $label;
    public $name;
    // public $disabled;


    public function __construct($label, $type, $name)
    {
        $this->type = $type;
        $this->label = $label;
        $this->name = $name;
        // $this->$disabled = $disabled;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.text-input');
    }
}