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

	public function taskState(Task $task)
	{
		if (!auth()->user()->is($task->user)) {
			return response('Access denied', 403);
		}

		$task->update([
			'is_done' => !$task->is_done
		]);

		return response(null, 200);
	}
}
