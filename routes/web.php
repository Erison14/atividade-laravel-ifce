<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

// --- ATIVIDADES DE ROTAS SIMPLES E VIEWS ---

Route::get('/ola', function () {
    return 'Olá, Laravel!';
});

Route::get('/curso/ads', function () {
    return 'Curso de Análise e Desenvolvimento de Sistemas';
});

Route::get('/curso/web', function () {
    return 'Disciplina Programação Web I';
});

Route::view('/sobre', 'sobre'); // Atividade 4 (Depuração: garantir arquivo minúsculo)
Route::view('/contato', 'contato');
Route::view('/institucional/missao', 'missao');

// --- ATIVIDADES DE CONTROLLER E DEPURAÇÃO ---

// Atividade 7 (Depuração): A rota específica deve vir ANTES da com parâmetro {id}
Route::get('/produto/novo', function () {
    return "Novo Produto";
});

Route::get('/produto/{id}', [PaginaController::class, 'produto']);

// Atividades 7, 9 e 10
Route::get('/empresa', [PaginaController::class, 'empresa']);
Route::get('/portfolio', [PaginaController::class, 'portfolio']);
Route::get('/equipe', [PaginaController::class, 'equipe']);

// Atividade 8 (Depuração): Corrigido para GET para funcionar no navegador
Route::get('/servicos', [PaginaController::class, 'servicos']);

// Atividade 10 (Depuração): Removida a duplicidade para evitar que uma sobrescreva a outra
Route::get('/blog', [PaginaController::class, 'blog']);

// Atividade 11 e 6 (Depuração)
Route::get('/usuario/{id}', [PaginaController::class, 'usuario']);