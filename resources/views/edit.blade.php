@extends('layouts.homeLayout')
@section('content')
@section('title', '| edit')
        <header class="d-flex justify-content-between ">
            <h2 class="head mt-3">Todo App</h2>
            <h2 class="head mt-4 " style="color:#0a0aee;">Hisp Tanzania</h2>
        <div class="add">
            <a href="{{route('index.show')}}" class="btn btn-primary">Back</a>
        </div>
        </header>
<div class="header2">
    <h4>Edit Your Task</h4>
</div>
    <form action="{{route('editTask.update',$task->id)}}" method="post">
        @csrf
        @method('put')
    <div class ="container formStyle">
        <div class="mb-3 mt-3">
            <label for="title" class="form-label mt-3">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{old('title',$task->title)}}">
        </div>
        <div class="mb-3 mt-3" >
            <label for="comment" class="form-label">Description</label>
            <textarea class="form-control" rows="5" id="description" name="description" value="">{{old('description',$task->description)}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Edit Task</button>
    </form>
@endsection
