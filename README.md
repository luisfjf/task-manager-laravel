# Gestor de Tareas con Laravel 📝

Este es un proyecto práctico y sencillo para aprender los fundamentos del framework PHP **Laravel**. La aplicación es un gestor de tareas (To-Do List) que permite a los usuarios crear, listar, marcar como completadas y eliminar tareas.

El proyecto está diseñado para ser una introducción clara al ciclo de desarrollo en Laravel, cubriendo desde la instalación y configuración hasta la creación de un CRUD (Create, Read, Update, Delete) funcional.

---
## Características Principales

-   **Crear nuevas tareas:** Añadir tareas a la lista a través de un formulario simple.
-   **Listar todas las tareas:** Ver una lista de todas las tareas pendientes y completadas.
-   **Actualizar estado de una tarea:** Marcar una tarea como "Completada" o revertirla a "Pendiente".
-   **Eliminar tareas:** Borrar permanentemente una tarea de la lista.
-   Implementa un ciclo **CRUD** completo para la gestión de tareas.

---
## Tecnologías Utilizadas

-   **Backend:** PHP 8.1+ / Laravel 10
-   **Base de Datos:** MySQL
-   **Frontend:** Vistas de Blade (motor de plantillas de Laravel) con HTML5 y CSS3 simple.
-   **Herramientas de desarrollo:**
    -   Composer para la gestión de dependencias.
    -   Artisan para la línea de comandos de Laravel.

---
## Requisitos Previos

Para poder ejecutar este proyecto, necesitas tener instalado lo siguiente en tu sistema:

-   Un entorno de desarrollo local como **Laragon** (Windows) o **Laravel Herd** (macOS).
-   **Composer** instalado globalmente.
-   **Git** instalado.

---
## Instalación y Puesta en Marcha

Sigue estos pasos para poner en funcionamiento el proyecto en tu entorno local:

1.  **Clonar el repositorio:**
    ```bash
    # Reemplaza la URL con la de tu propio repositorio en GitHub
    git clone [https://github.com/tu-usuario/gestor-tareas-laravel.git](https://github.com/tu-usuario/gestor-tareas-laravel.git)
    
    # Entrar en la carpeta del proyecto
    cd gestor-tareas-laravel
    ```

2.  **Instalar dependencias de PHP:**
    ```bash
    composer install
    ```

3.  **Configurar el archivo de entorno:**
    Copia el archivo de ejemplo `.env.example` para crear tu propio archivo de configuración `.env`.
    ```bash
    # En Windows (CMD o PowerShell)
    copy .env.example .env
    
    # En macOS o Linux
    cp .env.example .env
    ```

4.  **Generar la clave de la aplicación:**
    Este es un paso de seguridad crucial para cualquier proyecto de Laravel.
    ```bash
    php artisan key:generate
    ```

5.  **Configurar la base de datos:**
    -   Abre tu gestor de bases de datos (HeidiSQL, TablePlus, etc.) y crea una nueva base de datos vacía. Por ejemplo: `gestor_tareas_db`.
    -   Abre el archivo `.env` y edita las siguientes variables con los datos de tu base de datos:
        ```env
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=gestor_tareas_db
        DB_USERNAME=root
        DB_PASSWORD=
        ```

6.  **Ejecutar las migraciones:**
    Este comando creará todas las tablas necesarias en tu base de datos (incluida la de sesiones).
    ```bash
    php artisan migrate
    ```

7.  **Iniciar el servidor:**
    -   **Si usas Laragon:** ¡Listo! Puedes acceder al proyecto desde la URL `http://gestor-tareas-laravel.test`.
    -   **Si no usas la URL automática:** Ejecuta el servidor de desarrollo de Artisan.
        ```bash
        php artisan serve
        ```
        Y accede a la aplicación desde `http://127.0.0.1:8000`.