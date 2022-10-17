<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TodoListController extends Controller
{
    function __construct() {
        $this->task = new Task;
    }

    function index() {
        $taskList = $this->task->getTaskList();
        return view('index', compact('taskList'));
    }

    function saveTask(Request $request) {
        $tasks = [
            'task' => $request->taskname
        ];

        $this->task->saveTask($tasks);
        return back();
    }

    function deleteTask($id) {
        $this->task->deleteTask($id);
        return back();
    }

    function updateTask($id) {
        $task = $this->task->getTask($id);
        return view('update-task', compact('task'));
    }

    function saveUpdatedTask(Request $request) {
        $data = [
            'task' => $request->updatetaskname
        ];

        $this->task->saveUpdateTask($data, $request->id);
        return redirect()->route('index');

    }
}
