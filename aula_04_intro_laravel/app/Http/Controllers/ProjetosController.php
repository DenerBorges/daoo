<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projetos;

class ProjetosController extends Controller
{
    public function index() {
        $projetos = (new Projetos())->all();
        //return response()->json($projetos);
        return view('projetos', ['projetos'=>$projetos]);
    }

    public function show($id) {
        $single = (new Projetos())->find($id);
        return view('singleProjetos', ['single'=>$single]);
     }
}
