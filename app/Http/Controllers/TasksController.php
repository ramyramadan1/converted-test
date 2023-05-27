<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use App\Models\Statistics;
use Illuminate\Routing\Controller as BaseController;
use App\Repositories\TaskRepository;
use App\Repositories\StatisticsRepository;
/**
 * Description of TasksController
 *
 * @author ramy
 */
class TasksController extends BaseController {

    private $taskRepo;
    private $statisticsRepo;
    public function __construct(TaskRepository $taskRepo,StatisticsRepository $statisticsRepository) {
        $this->taskRepo = $taskRepo;
        $this->statisticsRepo = $statisticsRepository;
    }
    /**
     * Show all Tasks 
     * @return view
     */
    public function index() {
        $allTasks = $this->taskRepo->tasksList();   
        return view('tasksList', ['all_tasks' => $allTasks]);
    }
    
    /**
     * Create New task OR show Form
     * @param Request $request
     * @return type
     */
    public function createTask(Request $request) {
        if ($request->isMethod('get')) {
            $taskModel = new User();
            $admins = $taskModel->getAdmins();
            $users = $taskModel->getUsers();
            return view('createTaskForm', ['users' => $users, 'admins' => $admins]);
        } else {
            $this->taskRepo->createTask($request->all());
            return redirect(route('tasks-list'));
        }
    }
    
    public function statisticsPage(){
        $topTenUsers = $this->statisticsRepo->statisticsList();
        
        return view('tasksStatistics',['top_ten_users'=>$topTenUsers]);
    }

}
