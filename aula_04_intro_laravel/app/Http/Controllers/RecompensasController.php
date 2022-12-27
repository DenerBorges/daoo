<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recompensa;

class RecompensasController extends Controller
{
    public function index() {
        $recompensas = (new Recompensa())->all();
        //return response()->json($recompensas);
        return view('Pages.Recompensas.index', ['recompensas'=>$recompensas]);
    }

    public function show($id) {
        return view('Pages.Recompensas.single',
        ['recompensa'=>Recompensa::find($id)]);
    }

    public function create() {
        return view('Pages.Recompensas.create');
    }

    public function store(Request $request) {
        $newRecompensa = $request->all();
        if (!Recompensa::create($newRecompensa))
            dd("Erro ao inserir nova recompensa!");
        return redirect('/dashboard/dashRecompensas');
    }

    public function edit($id) {
        return view('Pages.Recompensas.edit', ['recompensa' => Recompensa::find($id)]);
    }

    public function update(Request $request, $id) {
        $updatedRecompensa = $request->all();
        // dd($updatedRecompensa);
        if (!Recompensa::find($id)->update($updatedRecompensa))
            dd("Erro ao atualizar recompensa $id!");
        return redirect('/dashboard/dashRecompensas');
    }

    public function delete($id) {
        return view('Pages.Recompensas.delete', ['recompensa' => Recompensa::find($id)]);
    }

    public function remove(Request $request, $id) {
        if ($request->confirmar == 'Deletar')
            if (!Recompensa::destroy($id))
                dd("Erro ao deletar recompensa $id.");
        return redirect('/dashboard/dashRecompensas');
    }
}
