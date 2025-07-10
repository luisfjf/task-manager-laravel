<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // <-- 1. Importa el Facade Auth

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 2. Obtenemos el usuario de forma explícita
        /** @var \App\Models\User $user */
        $user = Auth::user();

        // Ahora el editor sabe que $user es un objeto User con una relación "tasks"
        $tasks = $user->tasks()->latest()->get();

        return view('tasks.index', ['tasks' => $tasks]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // Esta forma es correcta y eficiente
        $request->user()->tasks()->create([
            'title' => $request->title,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Tarea creada correctamente.');
    }

    // ... (los métodos show y edit no los usamos, los dejamos vacíos)

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        // 3. Usamos Auth::id() que es más claro para el editor
        if ($task->user_id !== Auth::id()) {
            abort(403); // Error de "Acceso Prohibido"
        }

        $task->completed = !$task->completed;
        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Tarea actualizada.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        // 4. Hacemos lo mismo aquí
        if ($task->user_id !== Auth::id()) {
            abort(403);
        }

        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Tarea eliminada.');
    }
}