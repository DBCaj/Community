<?php

namespace App\Http\Livewire;

use Livewire\Component;

class JqueryCdn extends Component
{
    public function render()
    {
        return view('livewire.jquery-cdn')->layout('main');
    }
}
