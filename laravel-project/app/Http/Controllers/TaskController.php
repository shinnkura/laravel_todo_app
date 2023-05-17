<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        // $tasks = Task::orderBy('created_at', 'asc')->get();
        $tasks = Task::all();
        // dd($tasks);
        return view('tasks', [
            'tasks' => $tasks
        ]);
    }

    public function store(Request $request)
    {
        $task = new Task;
        $task->title = $request->title;
        $task->save();

        return redirect('/');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/');
    }
}
