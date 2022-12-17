<?php

namespace App\Http\Livewire;

use App\Models\Projetos;
use Livewire\Component;

class Projects extends Component
{
    public $projetos;
    public $orderAsc=true;

    public function render()
    {
        return view('livewire.projects');
    }

    public function orderBy($column='id')
    {
        $this->projetos = Projetos::orderBy($column, $this->orderAsc ? 'asc' : 'desc')->get();
        $this->orderAsc = !$this->orderAsc;
    }

    public function orderByName()
    {
        $this->orderBy('nome');
    }

    public function orderByValue()
    {
        $this->orderBy('meta_de_valor');
    }
}
