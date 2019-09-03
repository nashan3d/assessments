<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



use App\Answer;

class Question extends Model
{
    protected $fillable = ['description'];

    

    public  function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function addAnswer($answer)
    {
        return  $this->answers()->create($answer);
    }
}
