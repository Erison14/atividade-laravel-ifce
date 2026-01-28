<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Exercício 6: index — listar
     */
    public function index()
    {
        return "Listagem de Alunos (Simulada)";
    }

    /**
     * Exercício 6: create — formulário
     */
    public function create()
    {
        return "Exibindo o formulário de cadastro de aluno";
    }

    /**
     * Exercício 6: store — salvar (simulado)
     */
    public function store(Request $request)
    {
        // Aqui simulamos o recebimento de um nome vindo de um form
        $nome = $request->input('nome', 'Aluno Desconhecido');
        return "Aluno $nome salvo com sucesso! (Simulado)";
    }

    /**
     * Exercício 6: show — exibir por ID
     */
    public function show(string $id)
    {
        return "Exibindo detalhes do Aluno com ID: " . $id;
    }

    // Os métodos abaixo (edit, update, destroy) podem ficar vazios 
    // ou com um return simples, pois não foram exigidos no Exercício 6.

    public function edit(string $id)
    {
        return "Formulário de edição do Aluno ID: " . $id;
    }

    public function update(Request $request, string $id)
    {
        return "Aluno ID $id atualizado!";
    }

    public function destroy(string $id)
    {
        return "Aluno ID $id removido!";
    }
}