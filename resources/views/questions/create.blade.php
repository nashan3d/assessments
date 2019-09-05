@extends('layouts.app')

@section('content')


<div class="container.fluid">

        <div class="row justify-content-center">
                <div class="col-md-8">
                        <div class="card">
                                <div class="card-body">
                                        <form method="post" action="/questions" >
                                        
                                        @csrf
                                                <div class="form-group">
                                                        <label class="col-form-label">Question Description</label>                                              
                                                        <textarea name="description" class="form-control" placeholder="Add Question" ></textarea>
                                                </div>
                                                <div class="form-group">
                                                        <button type="submit" class="btn btn-outline-success">Add Question</button>                                                
                                                        <a href="javascript:history.back()" class="btn btn-outline-success" >Back</a>                                           
                                                </div>
                                        </form>                               
                                </div>           
                        </div>
                </div>
        </div>
</div>



@endsection