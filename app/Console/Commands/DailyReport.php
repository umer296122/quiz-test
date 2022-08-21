<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\QuizResult;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
class DailyReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $quizzes=Quiz::where('quiz_subscription','=',1)->get();
   
        foreach($quizzes as $quiz)
        {
            $user=User::where('id','=',$quiz->user_id)->first();
           
            // $details=QuizResult::where('quiz_id','=',$quiz->id)->get();
            
            $results=QuizResult::where('quiz_id','=',$quiz->id)->get();
          $resultDetail=[];
        foreach( $results as $result)
        {
            $user=User::where('id','=',$result->user_id)->first();
            $quiz=Quiz::where('id','=',$result->quiz_id)->first();
    
            $resultDetail[]=[
                'user_name'=> $user->name,
                'quiz_name'=>$quiz->name,
                'correct'=>$result->correct_answer,
                'in_correct'=>$result->incorrect_answer,
                'percentage'=>$result->percentage
            ];
        }
            \Mail::to($user->email)->send(new \App\Mail\Mail($resultDetail));
        }
        
        \Log::info("Cron is working fine!");
        dd("Email is Sent.");
        
    }
}
