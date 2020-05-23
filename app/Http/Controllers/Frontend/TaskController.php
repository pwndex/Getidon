<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Task;
use Auth;

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

	public function postCreate()
	{
		// Post create task code
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
