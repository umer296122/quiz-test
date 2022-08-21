<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Answer;

class QuestionController extends Controller
{
    public function view($quizId)
    {
        $quiz=Quiz::where('id','=',$quizId)->first();
     return view('layouts.quiz-question',compact('quiz'));
    }
    public function store(Request $request)
    {
        $validator= $request->validate([
            'question_name' => 'required|string|max:255',
       
        ]);
        $questionAttributes=[
            'body'=>$request->question_name,
            'quiz_id'=>$request->quiz_id,
          ];
          $question = Question::create($questionAttributes);
          foreach($request->option as $key=>$option)
          {
            if(!empty($request->answer[$key]))
            {
                $isCorrect=1;
            }
            else{
                $isCorrect=0;
            }
            $answerAttributes=[
                'answer'=>$request->option[$key],
                'is_correct'=>$isCorrect,
                'question_id'=>$question->id,
            ];
            $answer=Answer::create($answerAttributes);

          }
          return redirect()->back();
    }
}
