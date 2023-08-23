<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Undefinedvars extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $list;
     public $item;

    public function __construct($list, $item)
    {
        $this->list = $list;
        $this->item = $item;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.undefinedvars');
    }
}
