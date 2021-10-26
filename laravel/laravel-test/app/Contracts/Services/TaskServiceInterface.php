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
     */
    public function addNewTask(Request $request);

    /**
     *To delete post by id
     * @param $id
     */
    public function deleteTask($id);
}
