<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index() 
    {   
        $tasks = Task::orderBy('name')->get();

        return view('index')->with('tasks', $tasks);
    }

    public function create()
    {
        return view('create');
    }

    public function save(Request $request)
    {
        Task::create($request->all());
        return redirect('/');
    }
}
