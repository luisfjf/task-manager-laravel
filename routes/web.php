<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController; // Importa el controlador

Route::get('/', function () {
    return redirect()->route('tasks.index'); // Redirige la raíz a la lista de tareas
});

Route::resource('tasks', TaskController::class);