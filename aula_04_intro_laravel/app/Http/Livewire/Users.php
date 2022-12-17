<?php

namespace App\Http\Livewire;

use App\Models\Usuarios;
use Exception;
use Livewire\Component;

class Users extends Component
{
    public $usuarios;
    public $orderAsc=true;

    public $nome;
    public $email;
    public $senha;
    public $idade;
    public $idusu;

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

    public function save()
    {
        $usuarios = [
            "nome" => $this->nome,
            "email" => $this->email,
            "senha" => $this->senha,
            "idade" => $this->idade,
        ];

        try {
            Usuarios::create($usuarios);
            $this->clear();
            $this->orderAsc = false;
            $this->orderBy();
        } catch(Exception $e) {
            dd('Erro ao inserir');
        }
    }

    private function clear()
    {
        $this->nome = '';
        $this->email = '';
        $this->senha = '';
        $this->idade = 0;
    }
}
