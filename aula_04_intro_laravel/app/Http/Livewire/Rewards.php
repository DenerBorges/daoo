<?php

namespace App\Http\Livewire;

use App\Models\Recompensas;
use Livewire\Component;

class Rewards extends Component
{
    public $recompensas;
    public $orderAsc=true;

    public function render()
    {
        return view('livewire.rewards');
    }

    public function orderBy($column='id')
    {
        $this->recompensas = Recompensas::orderBy($column, $this->orderAsc ? 'asc' : 'desc')->get();
        $this->orderAsc = !$this->orderAsc;
    }

    public function orderByTitle()
    {
        $this->orderBy('titulo');
    }

    public function orderByValue()
    {
        $this->orderBy('valor');
    }
}
