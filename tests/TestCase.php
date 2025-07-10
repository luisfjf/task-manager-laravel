<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Vite; // <-- 1. Importa el Facade de Vite

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Configura el entorno de prueba.
     */
    protected function setUp(): void // <-- 2. Añade este método
    {
        parent::setUp();

        Vite::withoutManifest(); // <-- 3. Esta es la línea clave
    }
}