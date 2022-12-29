<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        } catch (\Exception $error) {
            $message = [
                "erro" => "O projeto com o id: $id não foi encontrado!",
                "exception" => $error->getMessage()
            ];
            $status = 404;
            return response()->json($message, $status);
        }
    }

    public function store(Request $request)
    {
        try {
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
            $status = 401;
            return response()->json($message, $status);
        }
    }

    public function update(Request $request, int $id)
    {
        try {
            $data = $request->all();
            $updProjeto = Projeto::findOrFail($id);
            $updProjeto->update($data);
            return response()->json([
                'message' => 'Projeto atualizado com sucesso!',
                'projeto' => $updProjeto
            ]);
        } catch(Exception $error) {
            $message = [
                "Erro:" => "Erro ao atualizar novo projeto",
                "Exception:" => $error->getMessage()
            ];
            $status = 401;
            return response()->json($message, $status);
        }
    }

    public function remove(int $id)
    {
        $status = 404;
        try {
            if (!Projeto::findOrFail($id)->delete()) {
                $status = 500;
                throw new Exception("Erro ao deletar projeto de id: $id");
            }
            return response()->json([
                'message' => "Projeto id: $id removido com sucesso!"
            ]);
        } catch (Exception $error) {
            $message = [
                "Erro:" => "Erro ao remover projeto",
                "Exception" => $error->getMessage()
            ];
            return response()->json($message, $status);
        }
    }
}
