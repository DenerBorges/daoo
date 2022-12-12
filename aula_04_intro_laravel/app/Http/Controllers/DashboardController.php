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

    public function projeto() {
        return view('Pages.Projetos.index', ['projetos'=>Projetos::all()]);
    }

    public function recompensa() {
        return view('Pages.Recompensas.index', ['recompensas'=>Recompensas::all()]);
    }

    public function usuario() {
        return view('Pages.Usuarios.index', ['usuarios'=>Usuarios::all()]);
    }
}
