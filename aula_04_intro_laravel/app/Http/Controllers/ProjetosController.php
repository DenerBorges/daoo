<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projeto;

class ProjetosController extends Controller
{
    public function index() {
        $projetos = (new Projeto())->all();
        return view('Pages.Projetos.index', ['projetos'=>$projetos]);
    }

    public function show($id) {
        return view('Pages.Projetos.single',
        ['projeto'=>Projeto::find($id)]);
    }

    public function create() {
        return view('Pages.Projetos.create');
    }

    public function store(Request $request) {
        $newProjeto = $request->all();
        if (!Projeto::create($newProjeto))
            dd("Erro ao inserir novo projeto!");
        return redirect('/dashboard/dashProjetos');
    }

    public function edit($id) {
        return view('Pages.Projetos.edit', ['projeto' => Projeto::find($id)]);
    }

    public function update(Request $request, $id) {
        $updatedProjeto = $request->all();
        // dd($updatedProjeto);
        if (!Projeto::find($id)->update($updatedProjeto))
            dd("Erro ao atualizar projeto $id!");
        return redirect('/dashboard/dashProjetos');
    }

    public function delete($id) {
        return view('Pages.Projetos.delete', ['projeto' => Projeto::find($id)]);
    }

    public function remove(Request $request, $id) {
        if ($request->confirmar == 'Deletar')
            if (!Projeto::destroy($id))
                dd("Erro ao deletar projeto $id.");
        return redirect('/dashboard/dashProjetos');
    }
}
