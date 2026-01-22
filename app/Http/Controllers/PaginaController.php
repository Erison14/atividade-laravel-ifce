<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function empresa() { return 'Página da Empresa'; }

    public function sobre() { return view('sobre'); } // Atividade 2 e 3

    public function servicos() { return view('servicos'); }

    public function portfolio() { return view('portfolio'); }

    public function blog() { return view('blog'); }

    public function equipe() { return view('equipe'); }

    // Atividade 6 e 12: O parâmetro $id deve estar aqui
    public function usuario($id) { 
        return "Usuário: " . $id; 
    }

    public function produto($id) { 
        return "Produto ID: " . $id; 
    }
}