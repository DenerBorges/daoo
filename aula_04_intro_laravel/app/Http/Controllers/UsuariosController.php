<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuariosController extends Controller
{
    public function index() {
        $usuarios = (new Usuarios())->all();
        //return response()->json($usuarios);
        return view('Usuarios.usuarios', ['usuarios'=>$usuarios]);
    }

    public function show($id) {
        return view('Usuarios.singleUsuarios',
        ['single'=>Usuarios::find($id)]);
    }

    public function create() {
        return view('Usuarios.createUsuario');
    }

    public function store(Request $request) {
        $newUsuario = $request->all();
        if (!Usuarios::create($newUsuario))
            dd("Erro ao inserir novo usuário!");
        return redirect('/usuarios');
    }

    public function edit($id) {
        return view('Usuarios.editUsuario', ['usuario' => Usuarios::find($id)]);
    }

    public function update(Request $request, $id) {
        $updatedUsuario = $request->all();
        // dd($updatedUsuario);
        if (!Usuarios::find($id)->update($updatedUsuario))
            dd("Erro ao atualizar usuário $id!");
        return redirect('/usuarios');
    }

    public function delete($id) {
        return view('Usuarios.deleteUsuario', ['usuario' => Usuarios::find($id)]);
    }

    public function remove(Request $request, $id) {
        if ($request->confirmar == 'Deletar')
            if (!Usuarios::destroy($id))
                dd("Erro ao deletar usuário $id.");
        return redirect('/usuarios');
    }
}
