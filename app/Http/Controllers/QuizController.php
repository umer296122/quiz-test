<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\QuizResult;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function view()
    {
       return view('layouts.new-quiz');
    }
    public function store(Request $request)
    {
        $validator= $request->validate([
            'quiz_name' => 'required|string|max:255',
            'quiz_time' => 'required',
            'quiz_sub' => 'required',

       
        ]);
       $quizAttributes=[
         'name'=>$request->quiz_name,
         'quiz_time'=>$request->quiz_time.":00",
         'quiz_subscription'=>$request->quiz_sub,
         'user_id'=>Auth::user()->id,
       ];
      $quiz=  Quiz::create($quizAttributes);
        return redirect()->route('new-question',[$quiz->id]);
    }
    public function show($quizid)
    {
        $quiz=Quiz::where('id','=',$quizid)->first();
        $questions=Question::where('quiz_id','=',$quiz->id)->get();
       return view('layouts.view-quiz',compact('quiz','questions'));
    }
    public function submitQuiz(Request $request)
    {
        $correct=0;
        $inCorrect=0;

       
       foreach($request->option_answer as $key=>$answer)
       {
         
if(!empty($request->option[$key]))
{
$userAnswer=$request->option[$key];
}
else{
$userAnswer=0;
       }
       if($answer==$userAnswer)
       {
        $correct+=1;
      
       }
       else{
        $inCorrect+=1;

       }
    }
    $total=$correct+$inCorrect;
    $percentage=($correct/$total)*100;
    $percentage= number_format($percentage, 2);
   $quizAttributes=[
    'user_id'=>Auth::user()->id,
    'quiz_id'=>$request->quiz_id,
    'correct_answer'=>$correct,
    'incorrect_answer'=>$inCorrect,
    'percentage'=>$percentage,
   ];
   $result=QuizResult::create($quizAttributes);
   return redirect()->route('quiz-result', [$result]);
  
}
public function result($resultId)
{
    $result=QuizResult::where('id','=',$resultId)->first();
    return view('layouts.quiz-result',compact('result'));
}
public function list()
{
    $quizzes=Quiz::all();
    return view('layouts.quiz-list',compact('quizzes'));
}
public function ResultList()
{
    $users=User::all();
    $results=[];
    foreach($users as $user)
    {
        $result=QuizResult::where('user_id','=',$user->id)->get();
        $results[]=[
            'user_name'=>$user->name,
            'user_email'=>$user->email,
            'total_count'=>$result->count(),
            'max'=>$result->max('percentage'),
            'min'=>$result->min('percentage'),
            'avg'=>$result->avg('percentage'),

        ];
    //  
    }
 
    return view('dashboard',compact('results'));
}
public function dailyReport()
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
    
   
    dd("Email is Sent.");
}
}