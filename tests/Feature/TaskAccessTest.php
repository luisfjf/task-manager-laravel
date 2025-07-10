<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskAccessTest extends TestCase
{
    use RefreshDatabase;

    // ESTA PRUEBA ESTÁ BIEN
    public function test_tasks_page_is_inaccessible_to_guests(): void
    {
        $response = $this->get('/tasks');

        $response->assertRedirect('/login');
    }

    // ESTA PRUEBA TAMBIÉN ESTÁ BIEN
    public function test_tasks_page_is_accessible_to_authenticated_users(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/tasks');

        $response->assertStatus(200);
    }

    // El método test_example() que estaba aquí fue eliminado.
}