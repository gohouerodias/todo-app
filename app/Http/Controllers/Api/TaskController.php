<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    // GET /api/Tasks
    public function index()
    {
        return response()->json(
            Task::with('status')->get()
        );
    }

    // POST /api/Tasks
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'short_description' => 'required|string|max:255',
            'description' => 'nullable|string',
            'execution_datetime' => 'required|date',
            'status_id' => 'required|exists:statuses,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Some required fields are missing or invalid.',
                'errors' => $validator->errors()
            ], 422);
        }

        $task = Task::create($validator->validated());

        return response()->json([
            'success' => true,
            'message' => 'task created successfully.',
            'data' => $task
        ], 201);
    }
    // GET /api/Tasks/{id}
    public function show($id)
    {
        $task = Task::with('status')->findOrFail($id);

        return response()->json($task);
    }

    // PUT /api/Tasks/{id}
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'short_description' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'execution_datetime' => 'sometimes|required|date',
            'status_id' => 'sometimes|required|exists:statuses,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Some fields are missing or invalid.',
                'errors' => $validator->errors()
            ], 422);
        }

        $task->update($validator->validated());

        return response()->json([
            'success' => true,
            'message' => 'task updated successfully.',
            'data' => $task
        ]);
    }

    // DELETE /api/Tasks/{id}
    public function destroy($id)
    {
        Task::findOrFail($id)->delete();

        return response()->json([
            'message' => 'task deleted successfully'
        ]);
    }
}
