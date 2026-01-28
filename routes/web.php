<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;


Route::get('/empresa', [PaginaController::class, 'empresa']);
Route::get('/servicos', [PaginaController::class, 'servicos']);
Route::get('/portfolio', [PaginaController::class, 'portfolio']);
Route::get('/blog', [PaginaController::class, 'blog']);
Route::get('/equipe', [PaginaController::class, 'equipe']);

// Atividade 1
Route::get('/ola', function () {
    return 'Olá, Laravel!';
});

// Atividade 2
Route::get('/curso/ads', function () {
    return 'Curso de Análise e Desenvolvimento de Sistemas';
});

// Atividade 3
Route::get('/curso/web', function () {
    return 'Disciplina Programação Web I';
});

// Atividade 4
Route::view('/sobre', 'sobre');

// Atividade 5
Route::view('/contato', 'contato');

// Atividade 6
Route::view('/institucional/missao', 'missao');

Route::get('/usuario/{nome}', function ($nome) {
    return "Usuário: " . $nome;
});


// --- EXERCÍCIOS DE CURSOS ---
Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/novo', [CursoController::class, 'create']);
Route::get('/cursos/listagem', [CursoController::class, 'listagem']);
Route::get('/cursos/{id}', [CursoController::class, 'show']);

// --- EXERCÍCIO 5  ---
Route::get('/produtos/create', [ProdutoController::class, 'create']);
Route::post('/produtos', [ProdutoController::class, 'store']);

// --- EXERCÍCIO 6  ---
Route::resource('alunos', AlunoController::class);

// --- EXERCÍCIO 7 ---
Route::get('/disciplinas', [DisciplinaController::class, 'index']);
Route::get('/disciplinas/create', [DisciplinaController::class, 'create']);
Route::get('/disciplinas/{id}', [DisciplinaController::class, 'show']);