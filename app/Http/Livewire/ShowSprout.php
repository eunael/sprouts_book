<?php

namespace App\Http\Livewire;

use App\Models\Sprout;
use Livewire\Component;

class ShowSprout extends Component
{
    public $s;

    protected $queryString = ['s'];

    public Sprout $sprout;

    public function mount()
    {
        $this->sprout = Sprout::query()
            ->where('id', $this->s)
            ->firstOrFail();
    }

    public function render()
    {
        return view('livewire.show-sprout');
    }
}
