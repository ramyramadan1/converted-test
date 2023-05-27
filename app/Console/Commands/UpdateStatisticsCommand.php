<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdateStatisticsCommand extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'statistics:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Tasks statistics';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle() {
        DB::table('statistics')->truncate();
        $statisticsData = DB::table('tasks')
                        ->select('users.id as user_id',DB::raw('count(user_id) as tasks_count'))
                        ->join('users','tasks.user_id','users.id')
                        ->groupBy('user_id')
                        ->orderBy('tasks_count', 'desc')
                        ->limit(10)->get();
        if(!$statisticsData->isEmpty()){
            DB::table('statistics')->insert(json_decode($statisticsData,true));
        }

    }

}
