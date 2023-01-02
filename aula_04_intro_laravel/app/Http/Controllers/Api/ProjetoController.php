<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjetoRequest;
use App\Models\Projeto;
use Illuminate\Http\Request;
use \Exception;

class ProjetoController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->query('per_page');
        $paginateProjetos = Projeto::paginate($perPage);
        $paginateProjetos->appends([
            'per_page' => $perPage
        ]);
        return response()->json($paginateProjetos);
    }

    public function show($id)
    {
        try {
            return response()->json(Projeto::findOrFail($id));
        } catch (Exception $error) {
            $message = [
                "erro" => "O projeto com o id: $id não foi encontrado!",
                "exception" => $error->getMessage()
            ];
            $status = 404;
            return response()->json($message, $status);
        }
    }

    public function store(ProjetoRequest $request)
    {
        $statusHttp = 500;
        try {
            if (!$request->user()->tokenCan('is-admin')) {
                $statusHttp = 403;
                throw new Exception("Não possui permissão!");
            }
            $newProjeto = $request->all();
            $storedProjeto = Projeto::create($newProjeto);
            return response()->json([
                'message' => 'Projeto cadastrado com sucesso!',
                'projeto' => $storedProjeto
            ]);
        } catch (Exception $error) {
            $message = [
                "Erro:" => "Erro ao cadastrar novo projeto",
                "Exception:" => $error->getMessage()
            ];
            return response()->json($message, $statusHttp);
        }
    }

    public function update(Request $request, Projeto $projeto)
    {
        $statusHttp = 500;
        try {
            $data = $request->all();
            $projeto->update($data);
            return response()->json([
                'message' => 'Projeto atualizado com sucesso!',
                'projeto' => $projeto
            ]);
        } catch(Exception $error) {
            $message = [
                "Erro:" => "Erro ao atualizar novo projeto",
                "Exception:" => $error->getMessage()
            ];
            return response()->json($message, $statusHttp);
        }
    }

    public function remove(Projeto $projeto)
    {
        $status = 404;
        try {
            if (!$projeto->delete()) {
                $status = 500;
                throw new Exception("Erro ao deletar projeto: $projeto");
            }
            return response()->json([
                'message' => "Projeto removido com sucesso!"
            ]);
        } catch (Exception $error) {
            $message = [
                "Erro:" => "Erro ao remover projeto",
                "Exception" => $error->getMessage()
            ];
            return response()->json($message, $status);
        }
    }

    public function recompensas(Projeto $projeto)
    {
        return response()->json($projeto->load('recompensas'));
    }
}
