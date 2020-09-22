<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        $tasks = Task::all();

        return view('index', compact('tasks'));

    }

    public function create(){

        return view('create');
    }

    public function store(TaskRequest $request){

        $validated = $request->validated();

        Task::create($validated);

        return redirect(route('index'));
    }

    public function edit(Task $task){

        return view('edit',compact('task'));
    }

    public function update(TaskRequest $request){

        $validated = $request->validated();
        Task::whereId(request('id'))->update($validated);
    }

    public function destroy(){

        Task::find(request('id'))->delete();

        return redirect(route('index'));
    }
}
