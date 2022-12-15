<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projetos;

class ProjetosController extends Controller
{
    public function index() {
        $projetos = (new Projetos())->all();
        return view('Pages.Projetos.index', ['projetos'=>$projetos]);
    }

    public function show($id) {
        return view('Pages.Projetos.single',
        ['projeto'=>Projetos::find($id)]);
    }

    public function create() {
        return view('Pages.Projetos.create');
    }

    public function store(Request $request) {
        $newProjeto = $request->all();
        if (!Projetos::create($newProjeto))
            dd("Erro ao inserir novo projeto!");
        return redirect('/dashboard/dashProjetos');
    }

    public function edit($id) {
        return view('Pages.Projetos.edit', ['projeto' => Projetos::find($id)]);
    }

    public function update(Request $request, $id) {
        $updatedProjeto = $request->all();
        // dd($updatedProjeto);
        if (!Projetos::find($id)->update($updatedProjeto))
            dd("Erro ao atualizar projeto $id!");
        return redirect('/dashboard/dashProjetos');
    }

    public function delete($id) {
        return view('Pages.Projetos.delete', ['projeto' => Projetos::find($id)]);
    }

    public function remove(Request $request, $id) {
        if ($request->confirmar == 'Deletar')
            if (!Projetos::destroy($id))
                dd("Erro ao deletar projeto $id.");
        return redirect('/dashboard/dashProjetos');
    }
}
