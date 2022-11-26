<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index() {
        $produtos = (new Produto())->all();
        //return response()->json($produtos);
        return view('Produtos.produtos', ['produtos'=>$produtos]);
    }

    public function show($id) {
        return view('Produtos.singleProduto',
        ['single'=>Produto::find($id)]);
    }

    public function create() {
        return view('Produtos.createProduto');
    }

    public function store(Request $request) {
        $newProduto = $request->all();
        $newProduto['importado'] = ($request->importado) ? true : false;
        if (!Produto::create($newProduto))
            dd("Erro ao inserir novo produto!");
        return redirect('/produtos');
    }

    public function edit($id) {
        return view('Produtos.editProduto', ['produto' => Produto::find($id)]);
    }

    public function update(Request $request, $id) {
        $updatedProduto = $request->all();
        $updatedProduto['importado'] = $request->importado && true;
        // dd($updatedProduto);
        if (!Produto::find($id)->update($updatedProduto))
            dd("Erro ao atualizar produto $id!");
        return redirect('/produtos');
    }

    public function delete($id) {
        return view('Produtos.deleteProduto', ['produto' => Produto::find($id)]);
    }

    public function remove(Request $request, $id) {
        if ($request->confirmar == 'Deletar')
            if (!Produto::destroy($id))
                dd("Erro ao deletar produto $id!");
        return redirect('/produtos');
    }
}
