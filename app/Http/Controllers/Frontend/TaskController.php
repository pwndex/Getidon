<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Frontend\TaskCreateRequest;
use App\Task;

class TaskController extends Controller
{
	public function index()
	{
		return view('Frontend.tasks.index', ['tasks' => auth()->user()->tasks()->paginate(3)]);
	}

	public function getCreate()
	{
		return view('Frontend.tasks.create');
	}

	public function postCreate(TaskCreateRequest $request)
	{
		Task::create(['user_id' => auth()->user()->id, 'title' => $request->input('title')]);

		return redirect('/tasks')->with('success', 'Task has been created!');
	}

	public function delete(Task $task)
	{
		$task->delete();

		return redirect()->back()->with('success', 'Task has been deleted!');
	}

	public function taskState(Request $request)
	{
		$task = Task::findOrFail($request->id);
		if(auth()->user()->id == $task->user_id){
			$task->is_done = ($task->is_done == 1) ? 0 : 1;
			$task->save();
		}
	}
}
