<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Bootstrap extends Component
{
    public function render()
    {
        // return view('livewire.bootstrap')->layout('pages.user-management.user-information.index');
        return view('livewire.bootstrap')->layout('main');
    }
}
