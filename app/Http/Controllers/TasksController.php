<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    public function init () {
        $tasks = Task::latest()->where('user_id',Auth::user()->id)->get();
        return response()->json(['tasks'=> $tasks],200);
    }
    public function add (Request $request) {
        $task = new Task();
        $task->task = $request->task;
        $task->user_id = Auth::user()->id;
        $task->save();
        return response()->json($task,200);
    }
    public function dlt (Request $request) {
        $task = Task::find($request->id);
        $task->delete();
        return response()->json($task,200);
    }
    public function edit (Request $request) {
        $task = Task::find($request->id);
        $task->update([
            'completed' => 'true'
        ]);
        return response()->json($task,200);
    }
}
