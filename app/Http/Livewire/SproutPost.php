<?php

namespace App\Http\Livewire;

use App\Models\Sprout;
use Livewire\Component;

class SproutPost extends Component
{
    public Sprout $sprout;

    public function render()
    {
        return view('livewire.sprout-post');
    }

    public function showSprout()
    {
        return redirect()->to(route('sprout.show') . "?s=" . $this->sprout->id);
    }
}
