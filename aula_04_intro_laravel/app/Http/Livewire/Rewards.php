<?php

namespace App\Http\Livewire;

use App\Models\Recompensas;
use Exception;
use Livewire\Component;

class Rewards extends Component
{
    public $recompensas;
    public $orderAsc = true;
    public $orderColumn = 'id';

    public $titulo;
    public $descricao;
    public $valor;
    public $idrec;

    public function render()
    {
        return view('livewire.rewards');
    }

    public function orderBy($column = 'id')
    {
        $this->orderColumn = $column;
        $this->recompensas = Recompensas::orderBy(
            $this->orderColumn,
            $this->orderAsc ? 'asc' : 'desc'
        )->get();
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

    public function save()
    {
        $recompensas = [
            "titulo" => $this->titulo,
            "descricao" => $this->descricao,
            "valor" => $this->valor,
        ];

        try {
            Recompensas::create($recompensas);
            $this->clear();
            $this->orderAsc = false;
            $this->orderBy();
        } catch (Exception $e) {
            dd('Erro ao inserir');
        }
    }

    private function clear()
    {
        $this->titulo = '';
        $this->descricao = '';
        $this->valor = 0;
    }

    public function remove($id)
    {
        if (!Recompensas::destroy($id))
            return "Erro!";
        $this->orderAsc = !$this->orderAsc;
        $this->orderBy($this->orderColumn);
    }

    public function update($id)
    {

        $recompensas = [
            "titulo" => $this->titulo,
            "descricao" => $this->descricao,
            "valor" => $this->valor,
        ];
        Recompensas::findOrFail($id)->update($recompensas);
        $this->orderAsc = !$this->orderAsc;
        $this->orderBy($this->orderColumn);
        $this->clear();
    }
}
