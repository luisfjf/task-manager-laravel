<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test to verify the root URL redirects to the login page for guests.
     */
    public function test_the_application_root_redirects_to_login_for_guests(): void
    {
        $response = $this->get('/');

        // Afirmamos que la respuesta es una redirección a /login
        $response->assertRedirect('/login');
    }
}