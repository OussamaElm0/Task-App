<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index() {
        return view("all",[
            "tasks" => Task::latest()->paginate(10)
        ]);
    }

    public function add(TaskRequest $request) {
        $task = Task::create($request->validated());
        $task->save();

        return redirect()->route("tasks.find",[
            "task" => $task
        ]);
    }

    public function findTask(Task $task) {
        return view("show",[
            "task" => $task
        ]);
    }

    public function deleteTask(Task $task) {
        $task->delete();

        return view("all",[
            "tasks" => Task::latest()->paginate(10)
        ]);
    }

    public function edit(Task $task, TaskRequest $request) {
        $task->update($request->validated());

        return redirect()
                ->route("tasks.find",["task" => $task])
                ->with("success","Task updated successfully!");
    }

    public function toggleStatus(Task $task) {
        $task->status = !$task->status;
        $task->save();

        return redirect()->back();
    }
}
