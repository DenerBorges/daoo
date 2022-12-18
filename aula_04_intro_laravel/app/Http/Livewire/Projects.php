<?php

namespace App\Http\Livewire;

use App\Models\Projetos;
use Exception;
use Livewire\Component;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class Projects extends Component
{
    public $projetos;
    public $orderAsc = true;
    public $orderColumn = 'id';

    public $nome;
    public $meta;
    public $dias;
    public $idproj;

    public function render()
    {
        return view('livewire.projects');
    }

    public function orderBy($column = 'id')
    {
        $this->orderColumn = $column;
        $this->projetos = Projetos::orderBy(
            $this->orderColumn,
            $this->orderAsc ? 'asc' : 'desc'
        )->get();
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

    public function save()
    {
        $projetos = [
            "nome" => $this->nome,
            "meta_de_valor" => $this->meta,
            "dias_para_atingir" => $this->dias,
        ];

        try {
            Projetos::create($projetos);
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
        $this->meta = 0;
        $this->dias = 0;
    }

    public function remove($id)
    {
        if (!Projetos::destroy($id))
            return "Erro!";
        $this->orderAsc = !$this->orderAsc;
        $this->orderBy($this->orderColumn);
    }

    public function update($id)
    {

        $projetos = [
            "nome" => $this->nome,
            "meta_de_valor" => $this->meta,
            "dias_para_atingir" => $this->dias,
        ];
        Projetos::findOrFail($id)->update($projetos);
        $this->orderAsc = !$this->orderAsc;
        $this->orderBy($this->orderColumn);
        $this->clear();
    }
}
