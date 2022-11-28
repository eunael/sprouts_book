<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TesteLivewire extends Component
{
    public $teste = "Nael";

    public function render()
    {
        return view('livewire.teste-livewire');
    }
}
