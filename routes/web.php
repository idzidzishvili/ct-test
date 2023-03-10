<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
   return redirect()->route('projects.index');
});

Route::resource('tasks', App\Http\Controllers\TasksController::class);
Route::get('project-tasks', [App\Http\Controllers\ProjectsController::class, 'projectTasks'])->name('project.tasks');
Route::resource('projects', App\Http\Controllers\ProjectsController::class);

Route::post('reorder-tasks', [App\Http\Controllers\AjaxController::class, 'reorderTasks']);
Route::get('get-tasks', [App\Http\Controllers\AjaxController::class, 'getTasks']);
