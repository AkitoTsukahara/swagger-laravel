<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTaskTest extends TestCase
{
    use RefreshDatabase;

    public function testPosttask()
    {
        $task_name = 'new task';

        $response = $this->postJson('api/tasks', [
            'name' => $task_name,
        ]);

        $id = $response->json(['id']);

        $response->assertStatus(201);
        $response->assertJson([
            'id' => $id,
            'name' => $task_name,
        ]);

        $this->assertDatabaseHas('tasks', [
            'id' => $id,
            'name' => $task_name,
        ]);
    }
}
