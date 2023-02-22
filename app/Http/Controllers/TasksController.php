<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Task;
use App\Http\Requests\TaskRequest;
use App\Models\Project;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::with('project')->orderBy('priority', 'desc')->get();
		return view('tasks', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::all();
        $task = new Task();
		return view('add-edit', ['resource' => 'tasks', 'action' => 'Add', 'sing' => 'task', 'task' => $task, 'projects' => $projects]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request): RedirectResponse
    {
        Task::create([
            'project_id' => $request->project_id,
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
        $projects = Project::all();
        $task = Task::findOrFail($id);
		return view('add-edit', ['resource' => 'tasks', 'action' => 'Edit', 'sing' => 'task', 'task' => $task, 'projects' => $projects, 'id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, string $id)
    {
        Task::findOrFail($id)->update([
            'project_id' => $request->project_id,
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

    public function test(){
        return view('test');
    }
}
