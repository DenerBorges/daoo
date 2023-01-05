<?php

namespace App\Http\Livewire;

use App\Models\User;
use Exception;
use Livewire\Component;

class Users extends Component
{
    public $usuarios;
    public $orderAsc = true;
    public $orderColumn = 'id';

    public $nome;
    public $email;
    public $password;
    public $idade;
    public $idusu;

    public function render()
    {
        return view('livewire.users');
    }

    public function orderBy($column = 'id')
    {
        $this->orderColumn = $column;
        $this->usuarios = User::orderBy(
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
            "password" => $this->password,
            "idade" => $this->idade,
        ];

        try {
            User::create($usuarios);
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
        $this->password = '';
        $this->idade = 0;
    }

    public function remove($id)
    {
        if (!User::destroy($id))
            return "Erro!";
        $this->orderAsc = !$this->orderAsc;
        $this->orderBy($this->orderColumn);
    }


    public function update($id)
    {

        $usuarios = [
            "nome" => $this->nome,
            "email" => $this->email,
            "password" => $this->password,
            "idade" => $this->idade,
        ];
        User::findOrFail($id)->update($usuarios);
        $this->orderAsc = !$this->orderAsc;
        $this->orderBy($this->orderColumn);
        $this->clear();
    }
}
