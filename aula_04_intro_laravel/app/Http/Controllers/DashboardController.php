<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Projeto;
use App\Models\Recompensa;
use App\Models\User;
use App\Models\Usuario;

class DashboardController extends Controller
{
    public function produto() {
        return view('dashboard',
            ['produtos'=>Produto::all(),
            'users'=>User::all()]);
    }

    public function singleProduto($id) {
        return view('Pages.Produtos.single-dash',
            ['produto'=>Produto::find($id) ]);
    }

    public function projeto() {
        return view('dashboardProjetos',
            ['projetos'=>Projeto::all()]);
    }

    public function singleProjeto($id) {
        return view('Pages.Projetos.single-dash',
            ['projeto'=>Projeto::find($id) ]);
    }

    public function recompensa() {
        return view('dashboardRecompensas',
            ['recompensas'=>Recompensa::all()]);
    }

    public function singleRecompensa($id) {
        return view('Pages.Recompensas.single-dash',
            ['recompensa'=>Recompensa::find($id) ]);
    }

    public function usuario() {
        return view('dashboardUsuarios',
            ['usuarios'=>Usuario::all()]);
    }

    public function singleUsuario($id) {
        return view('Pages.Usuarios.single-dash',
            ['usuario'=>Usuario::find($id) ]);
    }
}
