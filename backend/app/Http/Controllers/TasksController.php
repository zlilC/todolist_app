<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        return Task::all();
    }
    public function checkStat()
    {
        $taskStat=['all'=>10,'done'=>'1','todo'=>7];
        return $taskStat;
    }
    public function show(Task $task)
    {
        return $task;
    }
    public function store(Request $request)
    {
        $task = Task::create($request->all());

        return response()->json($task, 201);
    }
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());

        return response()->json($task, 200);
    }
    public function delete($task_id)
    {
        $task = Task::find($task_id);
        $task->delete();
        return "Task record successfully deleted ";

    }
}
