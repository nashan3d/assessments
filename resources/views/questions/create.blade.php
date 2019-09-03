@extends('layouts.app')

@section('content')


<div class="container">

        <div class="row justify-content-center">
                <div class="col-md-8">
                        <div class="card">
                                <div class="card-body">
                                        <form method="post" action="/questions" >
                                        
                                        @csrf
                                                <div class="form-group row">
                                                        <label class="col-form-label"><b>Question Description</label>
                                                </div>
                                                <div class="form-group row">   
                                                        <textarea name="description" class="form-control" placeholder="Add Question" ></textarea>
                                                </div>
                                                <div class="form-group row">
                                                        <button type="submit" class="btn btn-primary">Add Question</button>                                                
                                                        <a href="javascript:history.back()" class="btn btn-primary" >Back</a>                                           
                                                </div>
                                        </form>                               
                                </div>           
                        </div>
                </div>
        </div>
</div>



@endsection