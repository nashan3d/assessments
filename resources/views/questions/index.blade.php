@extends('layouts.app')

@section('content')



<div class="conatiner.fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <table class="table table-borderless" style="border:none">
                <thead>
                    <tr>
                        <td></td>
                        <td><h3>Assessment</h3></td>
                        <td><a href="/questions/create" class="btn btn-outline-success">Add Question</a> </td>
                    </tr>
                </thead>
                
                @forelse($questions as $key => $question)
                <thead class="table-success">
                    <tr>
                    <th scope="col-sm" style="width:15%"><h5>Question {{$key+1}}.</h5></th>
                    <th scope="col"><label class="label"> {{ $question->description }}</label></th>
                    <th scope="col-sm" style="width:15%"><a href="/questions/{{ $question->id }}/edit">Edit</a>|</th>
                    </tr>
                </thead>
                    @forelse($question->answers as $answer)
                    <tbody>
                        <tr class="table-bordered">
                        
                        <td colspan="3" class="">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="isCorrectAnswer">
                                <label class="form-check-label">{{ $answer->detail }}</label>                                            
                            </div>                                       
                        </td>      
                        </tr>
                        </tbody>
                        @empty
                        <tbody>
                            <tr>
                                
                                <td colspan="3" class="">
                                    <p>Answer not yet created </p>
                                </td>
                            </tr>
                        </tbody>
                        @endforelse   
                                            

                    @empty
                    <tbody>
                        <tr>
                            <td colspan="3" class="">
                            <p>No Questions added</p>
                            </td>
                        <tr>
                    </tbody>
                    @endforelse    
                    
                </table>
                <p class="btn-lg btn-block">{{ $questions->links() }}</p>
            </div>
        </div>    
    </div>
</div>

@endsection