@extends('layout')


@section('title')
    To DO
@endsection



@section('content')
<h1 class="m-5">To Do list</h1>

    @foreach ($test as $item)
       <div class="container">
           <div class="border border-danger p-2 bg-light rounded m-2">
                <h3><a href="todo/{{$item->id}}"> {{$item->text}}</a></h3>
                <span class="badge badge-danger">{{$item->due}}</span>
           </div>
           
       </div>
    @endforeach    

@endsection