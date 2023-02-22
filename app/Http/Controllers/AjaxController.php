<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class AjaxController extends Controller
{
    
    public function reorderTasks(Request $request){
        foreach($request['priority'] as $pr => $id)
            Task::findOrFail($id)->update(['priority' => count($request['priority'])-$pr]);
        return response()->json(['status' => 'success']);
    }
}
