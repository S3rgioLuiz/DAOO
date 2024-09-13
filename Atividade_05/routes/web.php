<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\QuestaoController;
use App\Http\Controllers\AlternativaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ola',[HomeController::class,'index']);

//MODULOS

Route::get('/modulos', [ModuloController::class, 'index'])->name('modulos.index');

Route::get('/modulo/create', [ModuloController::class, 'create'])->name('modulo.create');

Route::post('/modulo', [ModuloController::class, 'store'])->name('modulo.store');

Route::get('/modulo/{id}', [ModuloController::class, 'show'])->name('modulo.show');

Route::get('/modulo/{id}/edit', [ModuloController::class, 'edit'])->name('modulo.edit');

Route::post('/modulo/{id}/edit', [ModuloController::class, 'update'])->name('modulo.update');

Route::delete('/modulo/{id}', [ModuloController::class, 'destroy'])->name('modulo.destroy');

//QUESTÕES

Route::get('/questoes', [QuestaoController::class, 'index'])->name('questoes.index');

Route::get('/questao/create', [QuestaoController::class, 'create'])->name('questao.create');

Route::post('/questao', [QuestaoController::class, 'store'])->name('questao.store');

Route::get('/questao/{id}', [QuestaoController::class, 'show'])->name('questao.show');

Route::get('/questao/{id}/edit', [QuestaoController::class, 'edit'])->name('questao.edit');

Route::post('/questao/{id}/edit', [QuestaoController::class, 'update'])->name('questao.update');

Route::delete('/questao/{id}', [QuestaoController::class, 'destroy'])->name('questao.destroy');

//ALTERNATIVAS

Route::get('/alternativas', [AlternativaController::class, 'index'])->name('alternativas.index');

Route::get('/alternativa/create', [AlternativaController::class, 'create'])->name('alternativa.create');

Route::post('/alternativa', [AlternativaController::class, 'store'])->name('alternativa.store');

Route::get('/alternativa/{id}', [AlternativaController::class, 'show'])->name('alternativa.show');

Route::get('/alternativa/{id}/edit', [AlternativaController::class, 'edit'])->name('alternativa.edit');

Route::post('/alternativa/{id}/edit', [AlternativaController::class, 'update'])->name('alternativa.update');

Route::delete('/alternativa/{id}', [AlternativaController::class, 'destroy'])->name('alternativa.destroy');

include_once __DIR__."/querys.php";
