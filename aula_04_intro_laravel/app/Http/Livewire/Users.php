<?php

namespace App\Http\Livewire;

use App\Models\Usuarios;
use Livewire\Component;

class Users extends Component
{
    public $usuarios;
    public $orderAsc=true;

    public function render()
    {
        return view('livewire.users');
    }

    public function orderBy($column='id')
    {
        $this->usuarios = Usuarios::orderBy($column, $this->orderAsc ? 'asc' : 'desc')->get();
        $this->orderAsc = !$this->orderAsc;
    }

    public function orderByName()
    {
        $this->orderBy('nome');
    }

    public function orderByYearsOld()
    {
        $this->orderBy('idade');
    }
}
