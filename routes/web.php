<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});


Route::controller(TaskController::class)->group(function() {
    Route::get("/tasks","index")->name("tasks.index");
    Route::get("/tasks/add","createTaskView")->name("tasks.add");
    Route::get("/tasks/{task}", "findTask")->name(('tasks.find'));
    Route::get("/tasks/{task}/edit","editTaskView")->name("task.edit");
    Route::post("/tasks/add","add")->name("tasks.add");
    Route::put("/tasks/{task}","edit")->name("tasks.edit");
    Route::put("/tasks/{task}/toggling-status","toggleStatus")->name("tasks.status");
    Route::delete("/tasks/{task}","deleteTask")->name("tasks.delete");
});
