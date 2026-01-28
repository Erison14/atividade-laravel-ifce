<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    // Listar disciplinas (Enviando dados para a view)
    public function index() 
    {
        $disciplinas = ['Programação Web I', 'Banco de Dados', 'Estrutura de Dados', 'Redes de Computadores'];
        return view('disciplinas.index', compact('disciplinas'));
    }

    // Formulário de cadastro (View organizada)
    public function create() 
    {
        return view('disciplinas.create');
    }

    // Visualizar por ID (Uso de parâmetros)
    public function show($id) 
    {
        return view('disciplinas.show', ['id' => $id]);
    }
}