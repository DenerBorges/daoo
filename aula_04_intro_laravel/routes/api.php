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

Route::get('projeto', [ProjetoController::class, 'index']);
Route::get('projeto', [ProjetoController::class, 'show']);
Route::post('projeto', [ProjetoController::class, 'store']);
Route::put('projeto', [ProjetoController::class, 'update']);
Route::delete('projeto', [ProjetoController::class, 'remove']);

Route::apiResource('recompensa', RecompensaController::class);
Route::get('recompensa/{recompensa}/projetos',
        [RecompensaController::class, 'recompensas']
);
