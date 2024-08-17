<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuloController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ola',[HomeController::class,'index']);

Route::get('/modulos', [ModuloController::class, 'index'])->name('modulos.index');

Route::get('/modulo/create', [ModuloController::class, 'create'])->name('modulo.create');

Route::post('/modulo', [ModuloController::class, 'store'])->name('modulo.store');

Route::get('/modulo/{id}', [ModuloController::class, 'show'])->name('modulo.show');

Route::get('/modulo/{id}/edit', [ModuloController::class, 'edit'])->name('modulo.edit');

Route::post('/modulo/{id}/edit', [ModuloController::class, 'update'])->name('modulo.update');

Route::delete('/modulo/{id}', [ModuloController::class, 'destroy'])->name('modulo.destroy');