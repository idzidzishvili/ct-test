<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Task;
use App\Http\Requests\TaskRequest;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::orderBy('priority', 'asc')->orderBy('updated_at', 'asc')->get();
		return view('tasks', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $task = new Task();
		return view('add', ['resource' => 'tasks', 'task' => $task]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request): RedirectResponse
    {
        Task::create([
            'name' => $request->name,
        ]);
        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::findOrFail($id);
		return view('edit', ['resource' => 'tasks', 'task' => $task, 'id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, string $id): RedirectResponse
    {
        Task::findOrFail($id)->update([
            'name' => $request->name
        ]);
        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Task::findOrFail($id)->delete();
		return redirect()->route('tasks.index');
    }
}
