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

Route::get("/tasks",[TaskController::class, "index"])->name("tasks.index");
Route::get("/tasks/add",[HomeController::class,"addTask"])->name("tasks.add");
Route::get("/tasks/{task}", [TaskController::class, "findTask"])->name(('tasks.find'));
Route::get("/tasks/{task}/edit",[HomeController::class,"editTask"])->name("task.edit");
Route::post("/tasks/add",[TaskController::class,"add"])->name("tasks.add");
Route::put("/tasks/{task}",[TaskController::class,"edit"])->name("tasks.edit");
Route::put("/tasks/{task}/toggling-status", [TaskController::class, "toggleStatus"])->name("tasks.status");
Route::delete("/tasks/{task}",[TaskController::class, "deleteTask"])->name("tasks.delete");