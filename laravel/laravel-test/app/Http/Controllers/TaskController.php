<?php

namespace App\Http\Controllers;

use App\Contracts\Services\TaskServiceInterface;
use App\Http\Requests\StoreTaskRequest;


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
     * check validate with form request StoreTaskRequest
     * @param $request
     * @return view tasks
     */
    public function addNewTask(StoreTaskRequest $request)
    {
        $validated = $request->validated();
        $this->taskInterface->addNewTask($validated);
        return redirect('/');
    }

    /**
     *To delete post by id
     * @param $id
     * @return View task list
     */
    public function deleteTask($id)
    {
        $this->taskInterface->deleteTask($id);
        return redirect('/');
    }
}
