<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Projetos;
use App\Models\Recompensas;
use App\Models\Usuarios;

class DashboardController extends Controller
{
    public function produto() {
        return view('dashboard', ['produtos'=>Produto::all()]);
    }

    public function projeto() {
        return view('projetos', ['projetos'=>Projetos::all()]);
    }

    public function recompensa() {
        return view('recompensas', ['recompensas'=>Recompensas::all()]);
    }

    public function usuario() {
        return view('usuarios', ['usuarios'=>Usuarios::all()]);
    }
}
