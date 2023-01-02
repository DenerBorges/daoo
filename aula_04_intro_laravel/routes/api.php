<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\ProjetoController;
use App\Http\Controllers\Api\RecompensaController;
use App\Http\Controllers\Api\UserController;
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

Route::middleware('auth:sanctum')->group(function() {
    Route::get('projetos', [ProjetoController::class, 'index']);
    Route::get('projetos/{id}', [ProjetoController::class, 'show']);
    Route::post('projetos', [ProjetoController::class, 'store']);
    Route::put('projetos/{projeto}', [ProjetoController::class, 'update']);
    Route::delete('projetos/{projeto}', [ProjetoController::class, 'remove']);

    Route::get('projetos/{projeto}/recompensas',
            [ProjetoController::class, 'recompensas']
    );

    Route::put('/projetos/{projeto}', [ProjetoController::class, 'update'])
        ->middleware('ability:is-admin');

    Route::delete('/projetos/{projeto}', [ProjetoController::class, 'remove'])
        ->middleware('ability:is-admin');

    Route::apiResource('recompensas', RecompensaController::class);

    Route::apiResource('users', UserController::class);
});

Route::post('/users',[UserController::class,'store']);
Route::post('login',[LoginController::class,'login']);
