<?php

namespace App\Http\Controllers;

use App\Http\Requests\Tasks\TaskFormRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::latest()->get();
        return view('app.tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $task = new Task();
        return view('app.tasks._form', compact('task'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskFormRequest $request)
    {
        $validated = $request->validated();

        Task::create($validated);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('app.tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('app.tasks._form', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskFormRequest $request, Task $task)
    {
        $validated = $request->validated();
       

        $task->update($validated);

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}