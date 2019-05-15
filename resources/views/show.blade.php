@extends('layout')


@section('title')
    To DO
@endsection



@section('content')
<h1 class="m-5">To Do item</h1>

       <div class="container">

           <div class=" border-danger p-2 bg-light rounded m-2">
               <a href="http://localhost/todo-l/public/todo" class="btn btn-primary">Go Back</a>
                <h3><a href="{{$show->id}}"> {{$show->text}}</a></h3>
                <span class="badge badge-danger">{{$show->due}}</span>
                <hr>
                <p>{{$show->body}}</p>
                <br><br>
                <a href="http://localhost/todo-l/public/todo/{{$show->id}}/edit" class="btn btn-light">edit</a>
           </div>
           
       </div>

@endsection