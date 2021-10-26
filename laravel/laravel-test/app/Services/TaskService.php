<?php

namespace App\Services;

use App\Contracts\Dao\TaskDaoInterface;
use App\Contracts\Services\TaskServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


/**
 * Service class for task.
 */
class TaskService implements TaskServiceInterface
{
    /**
     * task dao
     */
    private $taskDao;
    /**
     * Class Constructor
     * @param TaskDaoInterface
     * @return
     */
    public function __construct(TaskDaoInterface $taskDao)
    {
        $this->taskDao = $taskDao;
    }

    /**
     * Show Task list
     * @return tasks
     */
    public function showTaskList()
    {
        return $this->taskDao->showTaskList();
    }

    /**
     * Add New Task
     * 
     * @param Illuminate\Http\Request $request
     */
    public function addNewTask(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        return $this->taskDao->addNewTask($request);
    }

    /**
     *To delete post by id
     * @param $id
     * @return task list
     */
    public function deleteTask($id)
    {
        return $this->taskDao->deleteTask($id);
    }
}
