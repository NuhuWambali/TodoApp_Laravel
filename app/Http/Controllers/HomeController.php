<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class HomeController extends Controller
{
    //
    public function index(){
        $tasks=Task::all();
        return view('homepage',compact('tasks'));
    }

    public function createPage(){
        return view('create');
    }

    public function editPage($id){
        $task=Task::findOrFail($id);
        return view('edit',compact('task'));
    }

    public function createTask(Request $request){
        $request->validate([
            'title'=>'String',
            'description'=>'string',
        ]);
        $task=new Task;
        $task->title=$request->title;
        $task->description=$request->description;
        $task->save();
        return to_route('index.show')->with('message', 'Task Added Successfully');
    }

    public function changeStatus($id){
        $task=Task::findOrFail($id);
        $task->status="task complete";
        $task->save();
        return to_route('index.show')->with('message','Task Status Changed To  complete');
    }

    public function editTask($id){
        $task=Task::findOrFail($id);
        return view('edit',compact('task'));
    }

    public function updateEditTask(Request $request, $id){
        $request->validate([
            'title'=>'String',
            'description'=>'string',
        ]);
        $task=Task::findOrFail($id);
        $task->update($request->all());
        return to_route('index.show')->with('message', 'Task Has Been Updated Successfully');
    }

    public function deleteTask($id){
        $task=Task::findOrFail($id);
        $task->delete();
        return to_route('index.show')->with('message','Task Deleted Successfully');
    }
}
