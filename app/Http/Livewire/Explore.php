<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Sprout;
use Livewire\Component;

class Explore extends Component
{
    public function render()
    {
        return view('livewire.explore');
    }

    public function getSproutsProperty()
    {
        return Sprout::query()->with('author')->latest()->get();
    }
}
