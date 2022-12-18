<?php

namespace App\Http\Livewire;

use App\Models\Usuarios;
use Exception;
use Livewire\Component;

class Users extends Component
{
    public $usuarios;
    public $orderAsc = true;
    public $orderColumn = 'id';

    public $nome;
    public $email;
    public $senha;
    public $idade;
    public $idusu;

    public function render()
    {
        return view('livewire.users');
    }

    public function orderBy($column = 'id')
    {
        $this->orderColumn = $column;
        $this->usuarios = Usuarios::orderBy(
            $this->orderColumn,
            $this->orderAsc ? 'asc' : 'desc'
        )->get();
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

    public function remove($id)
    {
        if (!Usuarios::destroy($id))
            return "Erro!";
        $this->orderAsc = !$this->orderAsc;
        $this->orderBy($this->orderColumn);
    }


    public function update($id)
    {

        $usuarios = [
            "nome" => $this->nome,
            "email" => $this->email,
            "senha" => $this->senha,
            "idade" => $this->idade,
        ];
        Usuarios::findOrFail($id)->update($usuarios);
        $this->orderAsc = !$this->orderAsc;
        $this->orderBy($this->orderColumn);
        $this->clear();
    }
}
