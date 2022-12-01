<?php

namespace App\Http\Livewire;

use App\Models\Sprout;
use Livewire\Component;

class ShowSprout extends Component
{
    public $s;

    protected $queryString = ['s'];

    public function render()
    {
        return view('livewire.show-sprout');
    }

    public function getSproutProperty()
    {
        return Sprout::query()
            ->where('id', $this->s)
            ->firstOrFail();
    }
}
