<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index() {
        $produtos = (new Produto())->all();
        //return response()->json($produtos);
        return view('produtos', ['produtos'=>$produtos]);
    }

    public function show($id) {
       $single = (new Produto())->find($id);
        return view('singleProduto', ['single'=>$single]);
    }
}
