<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect()->route('tasks.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// NUESTRAS RUTAS PROTEGIDAS
Route::middleware('auth')->group(function () {
    // Redirigir la raíz a la lista de tareas si el usuario está logueado
    Route::get('/', function () {
        return redirect()->route('tasks.index');
    });

    Route::resource('tasks', TaskController::class);
});
/*
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/

require __DIR__.'/auth.php';
