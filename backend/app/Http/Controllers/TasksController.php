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
    public function delete(Task $task)
    {
        $task->delete();

        return response()->json(null, 204);
    }
}
