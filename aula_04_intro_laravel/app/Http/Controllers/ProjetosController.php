<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projetos;

class ProjetosController extends Controller
{
    public function index() {
        $projetos = (new Projetos())->all();
        //return response()->json($projetos);
        return view('Projetos.projetos', ['projetos'=>$projetos]);
    }

    public function show($id) {
        return view('Projetos.singleProjetos',
        ['single'=>Projetos::find($id)]);
    }

    public function create() {
        return view('Projetos.createProjeto');
    }

    public function store(Request $request) {
        $newProjeto = $request->all();
        if (!Projetos::create($newProjeto))
            dd("Erro ao inserir novo projeto!");
        return redirect('/projetos');
    }

    public function edit($id) {
        return view('Projetos.editProjeto', ['projeto' => Projetos::find($id)]);
    }

    public function update(Request $request, $id) {
        $updatedProjeto = $request->all();
        // dd($updatedProjeto);
        if (!Projetos::find($id)->update($updatedProjeto))
            dd("Erro ao atualizar projeto $id!");
        return redirect('/projetos');
    }

    public function delete($id) {
        return view('Projetos.deleteProjeto', ['projeto' => Projetos::find($id)]);
    }

    public function remove(Request $request, $id) {
        if ($request->confirmar == 'Deletar')
            if (!Projetos::destroy($id))
                dd("Erro ao deletar projeto $id.");
        return redirect('/projetos');
    }
}
