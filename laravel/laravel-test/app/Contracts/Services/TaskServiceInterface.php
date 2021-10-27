<?php

namespace App\Contracts\Services;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of Task
 */
interface TaskServiceInterface
{
    /**
     * To get task list
     */
    public function showTaskList();

    /**
     * Add New Task
     * 
     * @param $validated
     */
    public function addNewTask($validated);

    /**
     *To delete post by id
     * @param $id
     */
    public function deleteTask($id);
}
