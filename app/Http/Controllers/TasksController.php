<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index() 
    {   
        $tasks = Task::get();
        return view('index')->with('tasks', $tasks);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Task::create($request->all());
        return to_route('index');
    }

    public function show(Request $request)
    {

    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
