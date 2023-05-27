<?php

namespace App\Repositories;

use App\Models\Statistics;

 /* 
 *
 * @author ramy
 */
class StatisticsRepository {
        
    private $model;
    
    public function __construct(Statistics $statistics) {
        $this->model=$statistics;
    }
    
   
    
    public function statisticsList() {
        return $this->model->select(['statistics.id','users.name','tasks_count'])
                ->join('users','statistics.user_id','users.id')
                ->get();
   }
    

}
