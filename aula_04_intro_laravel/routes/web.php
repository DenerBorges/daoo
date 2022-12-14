<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjetosController;
use App\Http\Controllers\RecompensasController;
use App\Http\Controllers\UsuariosController;
use GuzzleHttp\Handler\Proxy;
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

// Rotas Dashboard
Route::controller(DashboardController::class)
    ->group(function () {

    Route::prefix('/dashboard')
        ->middleware(['auth', 'verified'])
        ->group(function () {
        Route::get('/', 'produto')->name('dashProdutos');
        Route::get('/dashProjetos', 'projeto')->name('dashProjetos');
        Route::get('/dashRecompensas', 'recompensa')->name('dashRecompensas');
        Route::get('/dashUsuarios', 'usuario')->name('dashUsuarios');
    });

});

// Rotas Auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Rotas Produtos
Route::controller(ProdutoController::class)
    ->group(function () {

        Route::prefix('/produtos')->group(function () {
            Route::get('/', 'index')->name('produtos');
            Route::get('/{id}', 'show');
        });

        Route::prefix('/produto')
            ->middleware('auth')
            ->group(function () {
                Route::get('/', 'create');
                Route::post('/', 'store');

                Route::get('/edit/{id}', 'edit')->name('editprod');
                Route::post('/update/{id}', 'update')->name('updateprod');

                Route::get('/delete/{id}', 'delete')->name('deleteprod');
                Route::post('/remove/{id}', 'remove')->name('removeprod');
            });
    });

// Rotas Projetos
Route::controller(ProjetosController::class)
    ->group(function () {

        Route::prefix('/projetos')->group(function () {
            Route::get('/', 'index')->name('projetos');
            Route::get('/{id}', 'show');
        });

        Route::prefix('/projeto')
            ->middleware('auth')
            ->group(function () {
                Route::get('/', 'create');
                Route::post('/', 'store');

                Route::get('/edit/{id}', 'edit')->name('editproj');
                Route::post('/update/{id}', 'update')->name('updateproj');

                Route::get('/delete/{id}','delete')->name('deleteproj');
                Route::post('/remove/{id}', 'remove')->name('removeproj');
            });
    });

// Rotas Recompensas
Route::controller(RecompensasController::class)
    ->group(function () {

        Route::prefix('/recompensas')->group(function () {
            Route::get('/', 'index')->name('recompensas');
            Route::get('/{id}', 'show');
        });

        Route::prefix('/recompensa')
            ->middleware('auth')
            ->group(function () {
                Route::get('/', 'create');
                Route::post('/', 'store');

                Route::get('/edit/{id}', 'edit')->name('editrec');
                Route::post('/update/{id}', 'update')->name('updaterec');

                Route::get('/delete/{id}', 'delete')->name('deleterec');
                Route::post('/remove/{id}', 'remove')->name('removerec');
            });
    });

// Rotas Usuários
Route::controller(UsuariosController::class)
    ->group(function () {

        Route::prefix('/usuarios')->group(function () {
            Route::get('/', 'index')->name('usuarios');
            Route::get('/{id}', 'show');
        });

        Route::prefix('/usuario')
            ->middleware('auth')
            ->group(function () {
                Route::get('/', 'create');
                Route::post('/', 'store');

                Route::get('/edit/{id}', 'edit')->name('editusu');
                Route::post('/update/{id}', 'update')->name('updateusu');

                Route::get('/delete/{id}', 'delete')->name('deleteusu');
                Route::post('/remove/{id}','remove')->name('removeusu');
            });
    });
