@extends('layouts.app')

@section('content')

<div class="container.fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <div class="card-body">
                        <form method="POST" action="/questions/{{ $question->id }}">

                        @method('patch')

                        @csrf                            
                            <div class="form-group">
                                <label class="col-form-label" for="exampleFormControlInput1">Edit Question</label>
                                <textarea class="form-control" name="description" row="3"  required>{{ $question->description}}</textarea>
                            </div>
                                <button type="submit" class="btn btn-outline-success">Update Question</button>  
                                <a href="/questions" class="btn btn-outline-success" >Back</a>                                                           

                                @include('errors')                            
                        </form>                          
                    </div>


                    <div class="card-body">

                            <h5> Answers</h5>

                            @forelse ($question->answers as $key=> $answer)   

                            
                            <form method="POST"  action="/answers/{{ $answer->id }}">

                                <!-- @if($answer->isCorrectanswer)
                                    @method('delete') 
                                @endif -->
                                @method('patch')

                                @csrf

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="isCorrectAnswer"  onChange="this.form.submit()" {{ $answer->isCorrectAnswer ? 'checked' : ''}}>
                                    <input type="text" class="form-check-label" for="exampleRadios1" value="{{ $answer->detail }}" id="answer{{$key+1}}" readonly>        
                                    
                                </div>                           

                            </form> 

                            @empty 

                                <p>No Answer yet</p>

                    
                            @endforelse     
                    </div>                        
                        
                    <div class="card-body">

                        @unless($question->answers->count() == 4)

                        <form method="POST" action="/questions/{{ $question->id }}/answers">

                            @csrf
                            
                        
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Answer</label>
                                <textarea class="form-control" name="detail" placeholder="Type answer here" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <div class="form-check">                               
                                    <input class="form-check-input" type="checkbox" value="" name="isCorrectAnswer">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Correct Answer
                                    </label>  
                                </div>                                                        
                            </div>                            
                                    <button type="submit" class="btn btn-outline-success">Add Answer</button>                           

                            @include('errors')                        
                        </form>

                        @endunless

                    </div>
                </div>
            </div>
        </div>                       
    </div>
</div>

@endsection

