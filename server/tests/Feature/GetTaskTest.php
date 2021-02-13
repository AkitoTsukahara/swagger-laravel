<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Task;

class GetTaskTest extends TestCase
{
    use RefreshDatabase;

    public function testGetTask()
    {
        $task = Task::factory()->create();

        $response = $this->get('/api/tasks/' . $task->id);

        $response->assertStatus(200);
        $response->assertJson([
            'id' => $task->id,
            'name' => $task->name,
        ]);
    }
}
