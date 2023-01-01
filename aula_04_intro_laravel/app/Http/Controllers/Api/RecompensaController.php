<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RecompensaRequest;
use App\Models\Recompensa;
use Illuminate\Http\Request;
use \Exception;

class RecompensaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = $request->query('per_page');
        $paginateRecompensa = Recompensa::paginate($perPage);
        $paginateRecompensa->appends([
            'per_page' => $perPage
        ]);
        return response()->json($paginateRecompensa);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecompensaRequest $request)
    {
        try {
            $newRecompensa = $request->all();
            $storedRecompensa = Recompensa::create($newRecompensa);
            return response()->json([
                'message' => 'Recompensa cadastrada com sucesso!',
                'Recompensa' => $storedRecompensa
            ]);
        } catch (Exception $error) {
            $message = [
                "Erro:" => "Erro ao cadastrado novo Recompensa",
                "Exception:" => $error->getMessage()
            ];
            $status = 401;
            return response()->json($message, $status);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recompensa $recompensa
     * @return \Illuminate\Http\Response
     */
    public function show(Recompensa $recompensa)
    {
        return response()->json(['recompensa' => $recompensa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recompensa $recompensa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recompensa $recompensa)
    {
        try {
            $data = $request->all();
            $recompensa->update($data);
            return response()->json([
                'message' => 'Recomepensa atualizada com sucesso!',
                'Recompensa' => $recompensa
            ]);
        } catch (Exception $error) {
            $message = [
                "Erro" => "Erro ao atualizar recompensa",
                "Exception:" => $error->getMessage()
            ];
            $status = 401;
            return response()->json($message, $status);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recompensa $recompensa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recompensa $recompensa)
    {
        try {
            if (!$recompensa->delete())
                throw new Exception("Erro não detectado, tente mais tarde!");

            return response()->json([
                "msg" => "Recompensa excluído.",
                "recompensa" => $recompensa
            ]);
        } catch (Exception $error) {
            $responseError = [
                "Erro" => "Erro ao deletar a recompensa!",
                "Exception" => $error->getMessage()
            ];
            $statusHttp = 404;
            return response()->json($responseError, $statusHttp);
        }
    }

    public function Recompensas(Recompensa $recompensa)
    {
        return response()->json([
            ['recompensa' => $recompensa->load('Recompensas')]
        ]);
    }
}
