<?php

namespace App\Repositories;

use App\Models\Task;
use App\Exceptions\CreateTaskErrorException;
use Illuminate\Database\QueryException;
/**
 * 
 *
 * @author ramy
 */
class TaskRepository {
        
    private $model;
    
    public function __construct(Task $task) {
        $this->model=$task;
    }
    
    
    public function createTask(array $data) : Task{
        try{
            return $this->model->create($data);
        }catch(\Exception $queryException){
            throw new CreateTaskErrorException($queryException);
        }
    }
    
    public function tasksList() {
        return $this->model->select(['tasks.id','admins_list.name as admin_name','title','description','users_list.name as user_name'])
                ->join('users as admins_list','tasks.admin_id','admins_list.id')
                ->join('users as users_list','tasks.user_id','users_list.id')
                ->paginate(5);
    }
    
}
