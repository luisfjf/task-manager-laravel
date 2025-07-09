<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::latest()->get(); // Obtiene todas las tareas, las más nuevas primero
        return view('tasks.index', ['tasks' => $tasks]); // Pasa las tareas a la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // Creación de la tarea
        Task::create([
            'title' => $request->title,
        ]);

        // Redirección a la lista de tareas con un mensaje de éxito
        return redirect()->route('tasks.index')->with('success', 'Tarea creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        // Marca la tarea como completada o no completada
        $task->completed = !$task->completed;
        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Tarea actualizada.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete(); // Elimina la tarea de la base de datos

        return redirect()->route('tasks.index')->with('success', 'Tarea eliminada.');
    }
}
