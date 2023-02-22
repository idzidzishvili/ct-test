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
    // https://codepen.io/chingy/pen/Exxvpjo
    // https://codepen.io/tmarkart/pen/RxPjKd
    // https://codepen.io/markbandilla/pen/ObEmpa
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
        return view('add-edit', ['action' => 'Add', 'sing' => 'project', 'resource' => 'projects', 'project' => $project]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request): RedirectResponse
    {
        Project::create([
            'name' => $request->name,
        ]);
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
        return view('edit', ['action' => 'Edit', 'sing' => 'project', 'resource' => 'projects', 'project' => $project]);
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


    public function projectTasks()
    {
        $projects = Project::all();
        $tasks = null;
        if(count($projects)){
            $tasksArray = $projects[0]->task->pluck('id')->toArray();
            $tasks = Task::whereIn('id', $tasksArray)->get();
        }
        return view('tasks-by-project', ['projects' => $projects, 'tasks' => $tasks]);
    }
}
