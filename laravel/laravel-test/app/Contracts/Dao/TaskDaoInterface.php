<?php

namespace App\Contracts\Dao;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of Task
 */
interface TaskDaoInterface
{
    /**
     * To get task list
     */
    public function showTaskList();

    /**
     * Add New Task
     * @param $request 
     */
    public function addNewTask($request);

    /**
     *To delete post by id
     * @param $id
     */
    public function deleteTask($id);
}
