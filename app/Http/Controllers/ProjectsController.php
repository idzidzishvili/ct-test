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

    public function index()
    {
        $projects = Project::all();
        return view('projects', ['projects' => $projects]);
    }


    public function create()
    {
        $project = new Project();
        return view('add-edit', ['action' => 'Add', 'sing' => 'project', 'resource' => 'projects', 'project' => $project]);
    }


    public function store(ProjectRequest $request): RedirectResponse
    {
        Project::create([
            'name' => $request->name,
        ]);
        return redirect()->route('projects.index');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('add-edit', ['action' => 'Edit', 'sing' => 'project', 'resource' => 'projects', 'project' => $project, 'id' => $id]);
    }


    public function update(ProjectRequest $request, string $id): RedirectResponse
    {
        $project = Project::findOrFail($id);
        $project->update([
            'name' => $request->name
        ]);
        return redirect()->route('projects.index');
    }


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
        return view('project-tasks', ['projects' => $projects, 'tasks' => $tasks]);
    }
}
