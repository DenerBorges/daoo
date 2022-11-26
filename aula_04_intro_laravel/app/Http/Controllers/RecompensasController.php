<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recompensas;

class RecompensasController extends Controller
{
    public function index() {
        $recompensas = (new Recompensas())->all();
        //return response()->json($recompensas);
        return view('Recompensas.recompensas', ['recompensas'=>$recompensas]);
    }

    public function show($id) {
        return view('Recompensas.singleRecompensas',
        ['single'=>Recompensas::find($id)]);
    }

    public function create() {
        return view('Recompensas.createRecompensa');
    }

    public function store(Request $request) {
        $newRecompensa = $request->all();
        if (!Recompensas::create($newRecompensa))
            dd("Erro ao inserir nova recompensa!");
        return redirect('/recompensas');
    }

    public function edit($id) {
        return view('Recompensas.editRecompensa', ['recompensa' => Recompensas::find($id)]);
    }

    public function update(Request $request, $id) {
        $updatedRecompensa = $request->all();
        // dd($updatedRecompensa);
        if (!Recompensas::find($id)->update($updatedRecompensa))
            dd("Erro ao atualizar recompensa $id!");
        return redirect('/recompensas');
    }

    public function delete($id) {
        return view('Recompensas.deleteRecompensa', ['recompensa' => Recompensas::find($id)]);
    }

    public function remove(Request $request, $id) {
        if ($request->confirmar == 'Deletar')
            if (!Recompensas::destroy($id))
                dd("Erro ao deletar recompensa $id.");
        return redirect('/recompensas');
    }
}
