<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\TaskCreateRequest;
use App\Http\Requests\Backend\TaskUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Task;
use App\User;

class TaskController extends Controller
{
	public function index()
	{
		return view('Backend.tasks.index', ['tasks' => Task::paginate(6)]);
	}

	public function getCreate()
	{
		return view('Backend.tasks.create', ['users' => User::all()]);
	}

	public function postCreate(TaskCreateRequest $request)
	{
		Task::create($request->all());

		return redirect('/dashboard/tasks')->with('success', 'Task has been created!');
	}

	public function getUpdate(Task $task)
	{
		return view('Backend.tasks.update', ['users' => User::all(), 'task' => $task]);
	}

	public function postUpdate(TaskUpdateRequest $request, Task $task)
	{
		$task->title = $request->input('title');
		$task->user_id = $request->input('user_id');
		$task->is_done = $request->input('is_done');
		$task->save();
		
		return redirect('/dashboard/tasks')->with('success', 'Task has been updated!');
	}

	public function delete(Task $task)
	{
		$task->delete();

		return redirect()->back()->with('success', 'Task has been deleted!');
	}
}
