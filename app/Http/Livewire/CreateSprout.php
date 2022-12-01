<?php

namespace App\Http\Livewire;

use App\Models\Sprout;
use Livewire\Component;

class CreateSprout extends Component
{
    public $title;
    public $ingredients;
    public $preparation;
    public $description;

    protected $rules = [
        'title' => 'required|min:3',
        'ingredients' => 'required|min:3',
        'preparation' => 'required|min:3',
        'description' => 'nullable|min:3',
    ];

    public function render()
    {
        return view('livewire.create-sprout');
    }

    public function submit()
    {
        $this->validate();

        Sprout::create([
            'title' => $this->title,
            'ingredients' => $this->ingredients,
            'preparation' => $this->preparation,
            'description' => $this->description,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('dashboard');
    }
}
