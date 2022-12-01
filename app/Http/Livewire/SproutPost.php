<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SproutPost extends Component
{
    public $sprout;

    public function render()
    {
        return view('livewire.sprout-post');
    }

    public function showSprout()
    {
        return redirect()->route('sprout.show', $this->sprout->id);
    }
}
