<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Tareas</title>
    <style>
        body { font-family: sans-serif; max-width: 800px; margin: 40px auto; color: #333; }
        h1 { color: #1a202c; }
        form { margin-bottom: 20px; }
        input[type="text"] { padding: 8px; width: 300px; }
        button { padding: 8px 15px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        ul { list-style-type: none; padding: 0; }
        li { background: #f9f9f9; border: 1px solid #ddd; margin-top: -1px; padding: 12px; display: flex; justify-content: space-between; align-items: center; }
        .task-title.completed { text-decoration: line-through; color: #aaa; }
        .actions form { display: inline-block; margin-left: 10px; margin-bottom: 0; }
        .btn-delete { background-color: #f44336; }
        .btn-complete { background-color: #008CBA; }
    </style>
</head>
<body>

    <h1>Mi Gestor de Tareas 📝</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Añade una nueva tarea..." required>
        <button type="submit">Añadir Tarea</button>
    </form>

    <ul>
        @forelse ($tasks as $task)
            <li>
                <span class="task-title {{ $task->completed ? 'completed' : '' }}">
                    {{ $task->title }}
                </span>
                
                <div class="actions">
                    <form action="{{ route('tasks.update', $task) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn-complete">
                            {{ $task->completed ? 'Marcar Pendiente' : 'Completar' }}
                        </button>
                    </form>

                    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete">Eliminar</button>
                    </form>
                </div>
            </li>
        @empty
            <li>No hay tareas pendientes.</li>
        @endforelse
    </ul>

</body>
</html>