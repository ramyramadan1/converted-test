<?php

namespace Tests\Unit;

use Tests\TestCase;
use Database\Factories\UserFactory;

class TasksTest extends TestCase {

    /** @test */
    public function it_can_create_task() {
        $data = [
            'admin_id' => 1,
            'title' => 'Title',
            'description' => 'Desciption',
            'user_id' => 105
        ];
        $taskRepo = new \App\Repositories\TaskRepository(new \App\Models\Task);
        $task = $taskRepo->createTask($data);
        $this->assertInstanceOf(\App\Models\Task::class, $task);
        $this->assertEquals($data['admin_id'], $task->admin_id);
        $this->assertEquals($data['title'], $task->title);
        $this->assertEquals($data['description'], $task->description);
        $this->assertEquals($data['user_id'], $task->user_id);
    }
    
    public function it_can_list_tasks(){
        
        $taskRepo = new \App\Repositories\TaskRepository(new \App\Models\Task);
        $task = $taskRepo->createTask($data);
        $this->assertInstanceOf(\App\Models\Task::class, $task);
        $this->assertEquals($data['admin_id'], $task->admin_id);
        $this->assertEquals($data['title'], $task->title);
        $this->assertEquals($data['description'], $task->description);
        $this->assertEquals($data['user_id'], $task->user_id);
    }

}
