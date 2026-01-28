<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function create() { return view('produtos.create'); }
public function store(Request $request) {
    // Recebe o nome enviado pelo formulário
    $nome = $request->input('nome');
    return "Curso (ou Produto) cadastrado: " . $nome;
}
}
