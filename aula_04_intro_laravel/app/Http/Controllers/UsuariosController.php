<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuariosController extends Controller
{
    public function index() {
        $usuarios = (new User())->all();
        //return response()->json($usuarios);
        return view('Pages.Usuarios.index', ['usuarios'=>$usuarios]);
    }

    public function show($id) {
        return view('Pages.Usuarios.single',
        ['usuario'=>User::find($id)]);
    }

    public function create() {
        return view('Pages.Usuarios.create');
    }

    public function store(Request $request) {
        $newUsuario = $request->all();
        if (!User::create($newUsuario))
            dd("Erro ao inserir novo usuário!");
        return redirect('/dashboard/dashUsuarios');
    }

    public function edit($id) {
        return view('Pages.Usuarios.edit', ['usuario' => User::find($id)]);
    }

    public function update(Request $request, $id) {
        $updatedUsuario = $request->all();
        // dd($updatedUsuario);
        if (!User::find($id)->update($updatedUsuario))
            dd("Erro ao atualizar usuário $id!");
        return redirect('/dashboard/dashUsuarios');
    }

    public function delete($id) {
        return view('Pages.Usuarios.delete', ['usuario' => User::find($id)]);
    }

    public function remove(Request $request, $id) {
        if ($request->confirmar == 'Deletar')
            if (!User::destroy($id))
                dd("Erro ao deletar usuário $id.");
        return redirect('/dashboard/dashUsuarios');
    }
}
