@extends('layout')


@section('title')
    To DO
@endsection



@section('content')
<h1 class="m-5"> Create To Do </h1>
<div class="container">
        <form action="update" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="text" id="" class="form-control" placeholder="Enter text">
                </div>
                <div class="form-group">
                    <input type="text" name="body" id="" class="form-control" placeholder="Enter body">        
                </div>
                <div class="form-group">
                    <input type="text" name="due" id="" class="form-control" placeholder="Enter due">
                </div>
                <div class="form-group">
                        <input type="submit" name="submit"  class="btn btn-primary">
                </div>
                
            </form>
</div>
       

@endsection