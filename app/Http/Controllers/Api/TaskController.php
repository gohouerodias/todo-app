<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    // GET /api/reminders
    public function index()
    {
        return response()->json(
            Task::with('status')->get()
        );
    }

    // POST /api/reminders
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

        $reminder = Task::create($validator->validated());

        return response()->json([
            'success' => true,
            'message' => 'Reminder created successfully.',
            'data' => $reminder
        ], 201);
    }
    // GET /api/reminders/{id}
    public function show($id)
    {
        $reminder = Task::with('status')->findOrFail($id);

        return response()->json($reminder);
    }

    // PUT /api/reminders/{id}
    public function update(Request $request, $id)
    {
        $reminder = Task::findOrFail($id);

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

        $reminder->update($validator->validated());

        return response()->json([
            'success' => true,
            'message' => 'Reminder updated successfully.',
            'data' => $reminder
        ]);
    }

    // DELETE /api/reminders/{id}
    public function destroy($id)
    {
        Task::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Reminder deleted successfully'
        ]);
    }
}
