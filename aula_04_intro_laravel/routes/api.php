<?php

use App\Http\Controllers\Api\ProjetoController;
use App\Http\Controllers\Api\RecompensaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('projetos', [ProjetoController::class, 'index']);
Route::get('projetos/{id}', [ProjetoController::class, 'show']);
Route::post('projetos', [ProjetoController::class, 'store']);
Route::put('projetos/{id}', [ProjetoController::class, 'update']);
Route::delete('projetos/{id}', [ProjetoController::class, 'remove']);

Route::apiResource('recompensas', RecompensaController::class);

Route::get('projetos/{projeto}/recompensas',
        [ProjetoController::class, 'recompensas']
);
