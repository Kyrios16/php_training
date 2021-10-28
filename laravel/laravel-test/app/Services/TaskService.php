<?php

namespace App\Services;

use App\Contracts\Dao\TaskDaoInterface;
use App\Contracts\Services\TaskServiceInterface;
use App\Http\Requests\StoreTaskRequest;
use Illuminate\Http\Request;


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
     * @param $validated 
     * @return validated task
     */
    public function addNewTask($validated)
    {
        return $this->taskDao->addNewTask($validated);
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
