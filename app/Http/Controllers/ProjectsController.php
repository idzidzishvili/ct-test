<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Project;
use App\Models\Task;
use App\Http\Requests\ProjectRequest;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project = new Project();
        $tasks = Task::all();
        return view('add', ['resource' => 'projects', 'project' => $project, 'tasks' => $tasks, 'selectedTasks' => []]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request): RedirectResponse
    {
        $project = Project::create([
            'name' => $request->name,
        ]);
        $project->task()->attach($request->tasks);
        return redirect()->route('projects.index');
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
        $project = Project::findOrFail($id);
        $tasks = Task::all();
        $selectedTasks = $project->task->pluck('id')->toArray();
        return view('edit', ['resource' => 'projects', 'project' => $project, 'tasks' => $tasks, 'selectedTasks' => $selectedTasks, 'id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, string $id): RedirectResponse
    {
        $project = Project::findOrFail($id);
        $project->update([
            'name' => $request->name
        ]);
        $project->task()->sync($request->tasks);
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Project::findOrFail($id)->delete();
        return redirect()->route('projects.index');
    }
}
