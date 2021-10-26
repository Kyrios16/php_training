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
     * @param Illuminate\Http\Request $request
     */
    public function addNewTask($request)
    {
        $task = new Task;
        $task->name = $request->name;
        $task->save();
        return redirect('/');
    }

    /**
     *To delete post by id
     * @param $id
     * @return View task list
     */
    public function deleteTask($id)
    {
        Task::findOrFail($id)->delete();

        return redirect('/');
    }
}
