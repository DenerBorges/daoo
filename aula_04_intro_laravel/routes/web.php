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

// Rotas Welcome
Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola',
    [Homecontroller::class, 'index']);

// Rotas Produtos
Route::get('/produtos',
    [ProdutoController::class, 'index']);
Route::get('/produtos/{id}',
    [ProdutoController::class, 'show']);
Route::get('/produto',
    [ProdutoController::class, 'create']);
Route::post('/produto',
    [ProdutoController::class, 'store']);
Route::get('/produto/edit/{id}',
    [ProdutoController::class, 'edit'])->name('editprod');
Route::post('/produto/update/{id}',
    [ProdutoController::class, 'update'])->name('updateprod');
Route::get('/produto/delete/{id}',
    [ProdutoController::class, 'delete'])->name('deleteprod');
Route::post('/produto/remove/{id}',
    [ProdutoController::class, 'remove'])->name('removeprod');

// Rotas Projetos
Route::get('/projetos',
    [ProjetosController::class, 'index']);
Route::get('/projetos/{id}',
    [ProjetosController::class, 'show']);
Route::get('/projeto',
    [ProjetosController::class, 'create']);
Route::post('/projeto',
    [ProjetosController::class, 'store']);
Route::get('/projeto/edit/{id}',
    [ProjetosController::class, 'edit'])->name('editproj');
Route::post('/projeto/update/{id}',
    [ProjetosController::class, 'update'])->name('updateproj');
Route::get('/projeto/delete/{id}',
    [ProjetosController::class, 'delete'])->name('deleteproj');
Route::post('/projeto/remove/{id}',
    [ProjetosController::class, 'remove'])->name('removeproj');

// Rotas Recompensas
Route::get('/recompensas',
    [RecompensasController::class, 'index']);
Route::get('/recompensas/{id}',
    [RecompensasController::class, 'show']);
Route::get('/recompensa',
    [RecompensasController::class, 'create']);
Route::post('/recompensa',
    [RecompensasController::class, 'store']);
Route::get('/recompensa/edit/{id}',
    [RecompensasController::class, 'edit'])->name('editrec');
Route::post('/recompensa/update/{id}',
    [RecompensasController::class, 'update'])->name('updaterec');
Route::get('/recompensa/delete/{id}',
    [RecompensasController::class, 'delete'])->name('deleterec');
Route::post('/recompensa/remove/{id}',
    [RecompensasController::class, 'remove'])->name('removerec');

// Rotas Usuários
Route::get('/usuarios',
    [UsuariosController::class, 'index']);
Route::get('/usuarios/{id}',
    [UsuariosController::class, 'show']);
Route::get('/usuario',
    [UsuariosController::class, 'create']);
Route::post('/usuario',
    [UsuariosController::class, 'store']);
Route::get('/usuario/edit/{id}',
    [UsuariosController::class, 'edit'])->name('editusu');
Route::post('/usuario/update/{id}',
    [UsuariosController::class, 'update'])->name('updateusu');
Route::get('/usuario/delete/{id}',
    [UsuariosController::class, 'delete'])->name('deleteusu');
Route::post('/usuario/remove/{id}',
    [UsuariosController::class, 'remove'])->name('removeusu');
