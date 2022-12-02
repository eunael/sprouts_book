<?php

namespace App\Http\Livewire;

use App\Models\Sprout;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class EditSprout extends Component
{
    use AuthorizesRequests;

    public $s;

    protected $queryString = ['s'];

    public Sprout $sprout;

    protected $rules = [
        'sprout.title' => 'required|min:3',
        'sprout.ingredients' => 'required|min:3',
        'sprout.preparation' => 'required|min:3',
        'sprout.description' => 'nullable|min:3',
    ];

    public function mount()
    {
        $this->sprout = Sprout::query()
            ->where('id', $this->s)
            ->firstOrFail();
    }

    public function render()
    {
        $this->authorize('update', $this->sprout);

        return view('livewire.edit-sprout');
    }

    public function submit()
    {
        $this->authorize('update', $this->sprout);
        $this->validate();

        $this->sprout->save();

        return redirect()->route('dashboard');
    }
}
