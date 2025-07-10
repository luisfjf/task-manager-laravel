# Gestor de Tareas con Laravel 📝

Este es un proyecto práctico que demuestra cómo construir una aplicación web completa con el framework PHP **Laravel**. La aplicación es un gestor de tareas (To-Do List) multiusuario donde cada persona puede registrarse, iniciar sesión y gestionar su propia lista de tareas de forma privada.

El proyecto cubre desde la configuración inicial hasta la implementación de un sistema de autenticación, relaciones en la base de datos y una interfaz de usuario moderna creada con Tailwind CSS.

---
## Características Principales

-   **Autenticación de Usuarios:** Sistema completo de registro, inicio de sesión, cierre de sesión y recuperación de contraseña gracias a **Laravel Breeze**.
-   **Gestión de Tareas por Usuario:** Cada usuario tiene su propia lista de tareas. No pueden ver ni modificar las tareas de otros usuarios.
-   **Ciclo CRUD completo:** Funcionalidad para Crear, Leer, Actualizar (marcar como completada) y Eliminar tareas.
-   **Interfaz Moderna:** Diseño limpio y responsivo desarrollado con el framework **Tailwind CSS**.

---
## Tecnologías Utilizadas

-   **Backend:** PHP 8.1+ / Laravel 10
-   **Frontend:**
    -   Vistas de Blade
    -   Tailwind CSS
    -   Vite para la compilación de activos
-   **Base de Datos:** MySQL
-   **Autenticación:** Laravel Breeze
-   **Herramientas de desarrollo:**
    -   Composer
    -   Artisan
    -   NPM

---
## Requisitos Previos

Para poder ejecutar este proyecto, necesitas tener instalado lo siguiente en tu sistema:

-   Un entorno de desarrollo local como **Laragon** (Windows) o **Laravel Herd** (macOS).
-   **Node.js y NPM**.
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

3.  **Instalar dependencias de JavaScript:**
    ```bash
    npm install
    ```

4.  **Configurar el archivo de entorno:**
    Copia el archivo de ejemplo `.env.example` para crear tu propio archivo de configuración `.env`.
    ```bash
    # En Windows (CMD o PowerShell)
    copy .env.example .env
    
    # En macOS o Linux
    cp .env.example .env
    ```

5.  **Generar la clave de la aplicación:**
    ```bash
    php artisan key:generate
    ```

6.  **Configurar la base de datos:**
    -   Abre tu gestor de bases de datos y crea una nueva base de datos vacía (ej. `gestor_tareas_db`).
    -   Abre el archivo `.env` y edita las variables `DB_*` con los datos de tu base de datos.

7.  **Ejecutar las migraciones:**
    Este comando creará todas las tablas necesarias (usuarios, tareas, etc.) en tu base de datos.
    ```bash
    php artisan migrate
    ```

8.  **Iniciar los servidores:**
    Necesitas dos terminales abiertas:
    -   En la **primera terminal**, inicia el servidor de desarrollo de Vite para compilar el CSS y JS:
        ```bash
        npm run dev
        ```
    -   En la **segunda terminal**, inicia el servidor de Laravel para correr la aplicación:
        ```bash
        php artisan serve
        ```

9.  **Accede a la aplicación** desde `http://127.0.0.1:8000` y regístrate para empezar a usarla.