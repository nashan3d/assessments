@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <div class="card-body">
                        <form method="POST" action="/questions/{{ $question->id }}">

                        @method('patch')

                        @csrf

                            

                                <label class="col-form-label" for="">Edit Question</label> 

                                <textarea class="form-control" name="description"  required>{{ $question->description}}</textarea>

                                <button type="submit" class="btn btn-primary">Update Question</button>   

                                <a href="/questions" class="btn btn-primary" >Back</a>                                                           

                                @include('errors')                            
                        </form>
                         
                                

                                
                    </div>

                    <div class="card-body">

                            <b> Answers</b>

                            @forelse ($question->answers as $answer)   

                            
                            <form method="POST"  action="/answers/{{ $answer->id }}">

                                <!-- @if($answer->isCorrectanswer)
                                    @method('delete') 
                                @endif -->
                                @method('patch')

                                @csrf

                                <label class="label" for="correctanswer">

                                    <input type="radio" class="checkbox" name="isCorrectAnswer"  onChange="this.form.submit()" {{ $answer->isCorrectAnswer ? 'checked' : ''}}>

                                    {{ $answer->detail }}            

                                </label>

                                <a href=""></a>

                            </form> 

                            @empty 

                                <p>No Answer yet</p>

                    
                            @endforelse     
                    </div>                        
                        
                    <div class="card-body">

                        @unless($question->answers->count() == 4)

                        <form method="POST" action="/questions/{{ $question->id }}/answers">

                            @csrf
                            
                        
                            <div class="form-group row">
                                <label lass="col-form-label" for="">Answer</label> 

                                <textarea class="form-control" name="detail"  required></textarea>

                            </div>
                            
                            <div class="form-group row">

                            <input type="checkbox" class="checkbox" name="isCorrectAnswer">
                            <label lass="col-form-label" for="">Correct Answer</label> 

                            </div>

                            <div class="form-group row" >

                                    <button type="submit" class="btn btn-primary">Add Answer</button>

                            </div>

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

