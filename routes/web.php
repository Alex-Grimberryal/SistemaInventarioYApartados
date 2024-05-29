<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AmbienteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ambientes', [AmbienteController::class, 'index'])->name('ambientes.index');
Route::get('/ambientes/create', [AmbienteController::class, 'create'])->name('ambientes.create');
Route::post('/ambientes', [AmbienteController::class, 'store'])->name('ambientes.store');
Route::get('/ambientes/{id}', [AmbienteController::class, 'show'])->name('ambientes.show');
Route::get('/ambientes/{id}/edit', [AmbienteController::class, 'edit'])->name('ambientes.edit');
Route::put('/ambientes/{id}', [AmbienteController::class, 'update'])->name('ambientes.update');
Route::delete('/ambientes/{id}', [AmbienteController::class, 'destroy'])->name('ambientes.destroy');
