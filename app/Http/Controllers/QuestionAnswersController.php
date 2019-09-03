<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

class QuestionAnswersController extends Controller
{
    
    public function store(Question $question)
    {
        
        $answer = request()->validate(['detail'=>'required']);

        $answer['isCorrectAnswer'] = request()->has('isCorrectAnswer');

        $question->addAnswer($answer);

        return back();

    }

    public function update(Answer $answer)
    {
           
        Answer::where('question_id',$answer->question_id)
                                ->where('isCorrectAnswer',true)
                                ->update(['isCorrectAnswer' => false]);         
      
        $method = request()->has('isCorrectAnswer') ? 'correctAnswer' : 'incorrectAnswer';

        $answer->$method();

        return back();

    }
}
