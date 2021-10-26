<?php

namespace App\Http\Controllers;

use App\Contracts\Services\TaskServiceInterface;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class TaskController extends Controller
{
    /**
     *task interface
     */
    private $taskInterface;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TaskServiceInterface $taskServiceInterface)
    {
        $this->taskInterface = $taskServiceInterface;
    }

    /**
     * Show Task list
     * @return tasks
     */

    public function showTaskList()
    {
        $tasks = $this->taskInterface->showTaskList();
        return view('tasks', compact('tasks'));
    }

    /**
     * Add New Task
     * 
     * @param Illuminate\Http\Request $request
     */
    public function addNewTask(Request $request)
    {
        return $this->taskInterface->addNewTask($request);
    }

    /**
     *To delete post by id
     * @param $id
     * @return View task list
     */
    public function deleteTask($id)
    {
        return $this->taskInterface->deleteTask($id);
    }
}
