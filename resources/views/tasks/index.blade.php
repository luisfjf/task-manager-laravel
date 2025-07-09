@extends('layouts.app')

@section('title', 'Lista de Tareas')

@section('content')
    <h1 class="text-3xl font-semibold mb-6 text-gray-800 text-center">Mi Gestor de Tareas 📝</h1>

    <div class="max-w-2xl mx-auto">

        <form action="{{ route('tasks.store') }}" method="POST" class="mb-4">
            @csrf
            <div class="flex">
                <input type="text" name="title" placeholder="Añade una nueva tarea..." required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-2">Añadir Tarea</button>
            </div>
            @error('title')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </form>

        <ul class="bg-white shadow-md rounded-md overflow-hidden">
            @forelse ($tasks as $task)
                <li class="px-4 py-3 border-b last:border-b-0 flex justify-between items-center">
                    <span class="task-title {{ $task->completed ? 'line-through text-gray-500' : 'text-gray-800' }}">
                        {{ $task->title }}
                    </span>
                    
                    <div class="actions flex items-center">
                        <form action="{{ route('tasks.update', $task) }}" method="POST" class="inline-block mr-2">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline text-xs">
                                {{ $task->completed ? 'Pendiente' : 'Completar' }}
                            </button>
                        </form>

                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline text-xs">
                                Eliminar
                            </button>
                        </form>
                    </div>
                    </li>
            @empty
                <li class="px-4 py-3 text-gray-600">No hay tareas pendientes.</li>
            @endforelse
        </ul>

    </div>
    @endsection