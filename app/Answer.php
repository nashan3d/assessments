<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable =['detail','isCorrectAnswer'];

    public function correctAnswer($isCorrectAnswer=true)
    {
        $this->update(compact('isCorrectAnswer'));
    }

    public function incorrectAnswer()
    {
        $this->correctAnswer(false);
    }

}
