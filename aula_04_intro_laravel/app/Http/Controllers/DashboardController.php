<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Projetos;
use App\Models\Recompensas;
use App\Models\User;
use App\Models\Usuarios;

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
            ['projetos'=>Projetos::all()]);
    }

    public function singleProjeto($id) {
        return view('Pages.Projetos.single-dash',
            ['projeto'=>Projetos::find($id) ]);
    }

    public function recompensa() {
        return view('dashboardRecompensas',
            ['recompensas'=>Recompensas::all()]);
    }

    public function singleRecompensa($id) {
        return view('Pages.Recompensas.single-dash',
            ['recompensa'=>Recompensas::find($id) ]);
    }

    public function usuario() {
        return view('dashboardUsuarios',
            ['usuarios'=>Usuarios::all()]);
    }

    public function singleUsuario($id) {
        return view('Pages.Usuarios.single-dash',
            ['usuario'=>Usuarios::find($id) ]);
    }
}
