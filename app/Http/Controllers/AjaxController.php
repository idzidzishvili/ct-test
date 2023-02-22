<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class AjaxController extends Controller
{
    
    public function reorderTasks(Request $request){
        foreach($request['priority'] as $pr => $id)
            Task::findOrFail($id)->update(['priority' => count($request['priority']) - $pr]);
        return response()->json(['status' => 'success'], 200);
    }

    public function getTasks(Request $request){
        $project = Project::findOrFail($request->projectid);
        $tasksArray = $project->task->pluck('id')->toArray();
        $tasks = Task::whereIn('id', $tasksArray)->get();
        return response()->json(['status' => 'success', 'tasks' => $tasks], 200);
    }
}
