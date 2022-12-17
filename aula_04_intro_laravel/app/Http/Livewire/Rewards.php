<?php

namespace App\Http\Livewire;

use App\Models\Recompensas;
use Exception;
use Livewire\Component;

class Rewards extends Component
{
    public $recompensas;
    public $orderAsc=true;

    public $titulo;
    public $descricao;
    public $valor;
    public $idrec;

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
}
