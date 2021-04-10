<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;

Route::get('/', [PersonasController::class, 'mostrar']);

Route::get('/crear', [PersonasController::class, 'crear'])->name('crear');
Route::post('/crear', [PersonasController::class, 'save'])->name('save');

Route::get('/seleccionar/{id}', [PersonasController::class, 'seleccionar'])->name('seleccionar');

Route::get('/editar/{persona}', [PersonasController::class, 'editar'])->name('editar');

Route::put('/modificar/{persona}', [PersonasController::class, 'modificar'])->name('modificar');

Route::delete('/eliminar/{persona}', [PersonasController::class, 'eliminar'])->name('eliminar');

