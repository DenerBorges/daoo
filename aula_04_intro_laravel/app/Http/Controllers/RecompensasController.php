<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recompensas;

class RecompensasController extends Controller
{
    public function index() {
        $recompensas = (new Recompensas())->all();
        //return response()->json($recompensas);
        return view('recompensas', ['recompensas'=>$recompensas]);
    }

    public function show($id) {
       $single = (new Recompensas())->find($id);
        return view('singleRecompensas', ['single'=>$single]);
    }
}
