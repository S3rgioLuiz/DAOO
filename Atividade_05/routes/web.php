<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuloController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ola',[HomeController::class,'index']);

Route::get('/modulos', [ModuloController::class, 'index'])->name('modulos.index');

Route::get('/modulos/create', [ModuloController::class, 'create'])->name('modulos.create');

Route::post('/modulos', [ModuloController::class, 'store'])->name('modulos.store');

Route::get('/modulos/{id}', [ModuloController::class, 'show'])->name('modulos.show');

Route::get('/modulos/{id}/edit', [ModuloController::class, 'edit'])->name('modulos.edit');

Route::post('/modulos/{id}', [ModuloController::class, 'update'])->name('modulos.update');
