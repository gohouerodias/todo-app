<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;


class TaskController extends Controller
{
    // GET /tasks
    public function index()
    {
        return response()->json(Task::all());
    }

    // POST /tasks
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string'
        ]);

        $task = Task::create($request->all());

        return response()->json($task, 201);
    }

    // GET /tasks/{id}
    public function show($id)
    {
        return response()->json(Task::findOrFail($id));
    }

    // PUT /tasks/{id}
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $request->validate([
            'title' => 'required|string'
        ]);

        $task->update($request->all());

        return response()->json($task);
    }

    // DELETE /tasks/{id}
    public function destroy($id)
    {
        Task::findOrFail($id)->delete();

        return response()->json(['message' => 'Task deleted']);
    }
}
