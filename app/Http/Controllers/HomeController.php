<?php

namespace App\Http\Controllers;

use App\Models\Task;

class HomeController extends Controller
{
    public function addTask() {
        return view("add");
    }
    
    public function editTask(Task $task) {
        return view("edit",[
            "task" => $task
        ]);
    }
}
