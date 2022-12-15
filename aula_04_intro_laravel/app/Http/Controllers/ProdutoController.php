<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index() {
        $produtos = (new Produto())->all();
        return view('Pages.Produtos.index', ['produtos'=>$produtos]);
    }

    public function show($id) {
        return view('Pages.Produtos.single',
        ['produto'=>Produto::find($id)]);
    }

    public function create() {
        return view('Pages.Produtos.create');
    }

    public function store(Request $request) {
        $newProduto = $request->all();
        $newProduto['importado'] = ($request->importado) ? true : false;
        if (!Produto::create($newProduto))
            dd("Erro ao inserir novo produto!");
        return redirect('/dashboard');
    }

    public function edit($id) {
        return view('Pages.Produtos.edit', ['produto' => Produto::find($id)]);
    }

    public function update(Request $request, $id) {
        $updatedProduto = $request->all();
        $updatedProduto['importado'] = $request->importado && true;
        // dd($updatedProduto);
        if (!Produto::find($id)->update($updatedProduto))
            dd("Erro ao atualizar produto $id!");
        return redirect('/dashboard');
    }

    public function delete($id) {
        return view('Pages.Produtos.delete', ['produto' => Produto::find($id)]);
    }

    public function remove(Request $request, $id) {
        if ($request->confirmar == 'Deletar')
            if (!Produto::destroy($id))
                dd("Erro ao deletar produto $id!");
        return redirect('/dashboard');
    }
}
