<?php

namespace App\Dao;

use App\Models\Task;
use App\Contracts\Dao\TaskDaoInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Data accessing object for Task
 */
class TaskDao implements TaskDaoInterface
{
    /**
     * To get Task list
     * @return array $tasks task list
     */
    public function showTaskList()
    {
        $tasks = Task::orderBy('created_at', 'asc')->get();
        return $tasks;
    }


    /**
     * Add New Task
     * 
     * @param $validated validate value from request
     * @return $task
     */
    public function addNewTask($validated)
    {
        $task = new Task;
        $task->name = $validated['name'];
        $task->save();
        return $task;
    }

    /**
     *To delete post by id
     * @param $id
     */
    public function deleteTask($id)
    {
        Task::findOrFail($id)->delete();
    }
}
