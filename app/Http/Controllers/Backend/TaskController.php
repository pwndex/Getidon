<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
	public function index()
	{
		return view('Backend.tasks.index');
	}

	public function getCreate()
	{
		return view('Backend.tasks.create');
	}

	public function postCreate()
	{
		// code...
	}

	public function getUpdate()
	{
		return view('Backend.tasks.update');
	}

	public function postUpdate()
	{
		// code...
	}
}
