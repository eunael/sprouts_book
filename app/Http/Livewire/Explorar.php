<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Explorar extends Component
{
    private $count = 0;
    private $countId = 0;

    public $posts;

    public function mount()
    {
        $this->posts = [
            [
                'id' => $this->countId++,
                'autor' => 'José',
                'titulo' => 'Post 1',
                'descricao' => 'Descrição do post 1',
            ],
            [
                'id' => $this->countId++,
                'autor' => 'Manoela',
                'titulo' => 'Post 2',
                'descricao' => 'Descrição do post 3',
            ],
            [
                'id' => $this->countId++,
                'autor' => 'José',
                'titulo' => 'Post 3',
                'descricao' => 'Descrição do post 3',
            ]
        ];
    }

    public function render()
    {
        return view('livewire.explorar');
    }
}
