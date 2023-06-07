@extends('layouts.homeLayout')
    @section('content')
    <header class="d-flex justify-content-between">
        <h2 class="head mt-3">Todo App</h2>
        <h2 class="head mt-4 " style="color:#0a0aee;">Hisp Tanzania</h2>
        <div class="add">
        <a href="{{route('create.show')}}" class="btn btn-primary">Add Task</a>
        </div>
    </header>
    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
       {{session()->get('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
<div class="wrapper">
    <div class="header2">
        <h4>My To Do Tasks</h4>
    </div>
@if($tasks->count())
    @foreach ($tasks as $readTask )
       @if($readTask->status!='task complete')
       <div class="task ">
            <h4>{{$readTask->title}}</h4>
            <p>{{$readTask->description}}
            </p>
            <p> Created At : <span style="font-style:italic">{{$readTask->created_at}}</span></p>
            <div class="">
            <a class="btn btn-warning" href="{{route('status',$readTask->id)}}">Mark as read</a>
            <a class="btn btn-light" href="{{route('task.edit',$readTask->id)}}">Edit task</a>
            <a class="btn btn-danger " href="{{route('task.delete',$readTask->id)}}">Delete task</a>
            </div>
       </div>
       @else
       <div class="task " style="background-color: rgb(105, 105, 106);">
            <h4 style="text-decoration:line-through">{{$readTask->title}}</h4>
            <p style="text-decoration:line-through">{{$readTask->description}}
            </p>
            <p> Created At : <span style="font-style:italic">{{$readTask->created_at}}</span></p>
            <div class="">
            <a class="btn btn-light disabled" href="">Mark as read</a>
            <a class="btn btn-light disabled" href="">Edit task</a>
            <a class="btn btn-danger position" href="{{route('task.delete',$readTask->id)}}">Delete task</a>
            </div>
        </div>
       @endif
    @endforeach
@else
   <dv class="noTask" >
       <h4 style="margin-top:100px; background-color:aliceblue">No Task Yet</h4>
   </dv>

@endif
</div>
@endsection
