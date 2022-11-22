<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuariosController extends Controller
{
    public function index() {
        $usuarios = (new Usuarios())->all();
        //return response()->json($usuarios);
        return view('usuarios', ['usuarios'=>$usuarios]);
    }

    public function show($id) {
       $single = (new Usuarios())->find($id);
        return view('singleUsuarios', ['single'=>$single]);
    }
}
