<?php
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProjetosController;
use App\Http\Controllers\RecompensasController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola',[Homecontroller::class, 'index']);
Route::get('/produtos',[ProdutoController::class, 'index']);
Route::get('/produtos/{id}',[ProdutoController::class, 'show']);
Route::get('/projetos',[ProjetosController::class, 'index']);
Route::get('/projetos/{id}',[ProjetosController::class, 'show']);
Route::get('/recompensas',[RecompensasController::class, 'index']);
Route::get('/recompensas/{id}',[RecompensasController::class, 'show']);
Route::get('/usuarios',[UsuariosController::class, 'index']);
Route::get('/usuarios/{id}',[UsuariosController::class, 'show']);
