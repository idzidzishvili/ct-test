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

Route::get('/', [App\Http\Controllers\TasksController::class, 'index']);

Route::resource('tasks', App\Http\Controllers\TasksController::class);
Route::get('view-tasks', [App\Http\Controllers\ProjectsController::class, 'vewTasks'])->name('view.tasks');
Route::resource('projects', App\Http\Controllers\ProjectsController::class);

Route::post('reorder-tasks', [App\Http\Controllers\AjaxController::class, 'reorderTasks']);
Route::get('get-tasks', [App\Http\Controllers\AjaxController::class, 'getTasks']);


Route::get('/test', [App\Http\Controllers\TasksController::class, 'test']);
Route::post('test', [App\Http\Controllers\AjaxController::class, 'test']);