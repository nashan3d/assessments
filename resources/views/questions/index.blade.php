@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <div class="card-body">

                        
                        <div class="box" style="margin:left">

                            <a  href="/questions/create">Add Question</a>
                        
                        </div>


                        @forelse($questions as $question)

                        <div class="box">

                            <label class="label"><b>Question - {{ $question->id }}</b> {{ $question->description }}</label>

                            <a href="/questions/{{ $question->id }}/edit">Edit</a>

                            
                            @forelse($question->answers as $answer)

                            <br>
                                <input type="radio" class="checkbox" name="isCorrectAnswer">
                                <label>{{ $answer->detail }}</label>
                                

                            

                            @empty
                                <p>Answer not yet created </p>

                            @endforelse
                        
                        </div>

                        @empty
                            <p>No Questions added</p>

                        @endforelse

                        


                    </div>

                </div>
           </div>
        </div>
    </div>
</div>

@endsection