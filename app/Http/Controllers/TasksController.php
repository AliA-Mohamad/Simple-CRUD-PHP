<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index() 
    {   
        $tasks = Task::get();
        return view('index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Task::create($request->all());
        return to_route('tasks.index');
    }

    public function show(Request $request)
    {

    }

    public function edit(string $id)
    {
        $task = Task::findOrFail($id);
        return view('update', ['task' => $task]);
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $task = Task::findOrFail($id);
        $task->update($validatedData);

        return to_route('tasks.index');
    }

    public function destroy(string $id)
    {
        Task::destroy($id);
        return to_route('tasks.index');
    }
}
